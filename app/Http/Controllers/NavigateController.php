<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Models\User;
use App\Models\Postlike;
use App\Models\Share;
use App\Models\Reply;
use App\Models\Follower;
use App\Models\ReplyLike;
use App\Models\CommentLike;
use App\Http\Controllers\UsersController;
use App\SharedMethods;
class NavigateController extends Controller
{
    use SharedMethods;

    //for searching post and users
    public function search($thing) {
        $users = DB::table('users')
                    ->where(function($query) use ($thing){
                        $query->where('first_name','like','%'. $thing .'%')
                        ->orWhere('users.last_name', 'like', '%'. $thing .'%')
                        ->orWhere('users.username', 'like', '%'. $thing .'%');
                    })
                    ->select('id','first_name','last_name','profile_picture','username')
                    ->get();

        foreach($users as $user) {
            $ifFollowed = Follower::where('user_id', Auth::user()->id)->where('following_id', $user->id)->first(['accepted']);

            if(isset($ifFollowed)) {
                if($ifFollowed['accepted'] == true) {
                    //if the user already following the liker
                    $user->ifFollowed = 'following';
                }
                else {
                     //if the user already requested to follow the liker
                    $user->ifFollowed = 'requested';
                }
            }
            else {
                $user->ifFollowed = 'not_following';
            }
          
            if($user->id == Auth::user()->id) {
                $user->ifFollowed = 'self';
            }
        }
        
        $global_posts = DB::table('posts')
                            ->leftJoin('users', 'posts.user_id', '=', 'users.id')
                            ->where(function($query) use ($thing) {
                                $query->where('posts.content', 'like', '%'. $thing .'%')
                                    ->orWhere('users.first_name', 'like', '%'. $thing .'%')
                                    ->orWhere('users.last_name', 'like', '%'. $thing .'%')
                                    ->orWhere('users.username', 'like', '%'. $thing .'%');
                            })
                            ->where('posts.is_global', true)
                            ->select(
                                'posts.*', 
                                'users.first_name', 
                                'users.last_name', 
                                'users.username', 
                                'users.profile_picture',
                                DB::raw('2 as priority')
                            )
                            ->limit(20)
                            ->orderBy('posts.created_at', 'desc')
                            ->get(); 
        //posts results from the search
        $viewdata['posts'] = $this->populate_post($global_posts);
        //user results from the search
        $viewdata['users'] = $users;
        $viewdata['suggest_users'] = $this->suggest_users(); //suggest which users to follow to user
        // add skills, date format, number of comments and likes to the post
        $viewdata['trending_posts'] = $this->get_trending(2);

        return view('home.search',$viewdata);
    }

    //for going to search page
    public function input_search(Request $request) {
        return redirect('search/'.$request->search);
    }

    //for viewing saved posts
    public function saved_posts(){
        $saves = DB::table('saves')
                    ->where('saves.user_id', Auth::id())
                    ->leftJoin('posts','posts.id','=','saves.post_id')
                    ->leftJoin('users','users.id','=','posts.user_id')
                    ->select('posts.*','users.*')
                    ->get();

        $viewdata['posts'] = $this->populate_post($saves);
        $viewdata['suggest_users'] = $this->suggest_users(); //suggest which users to follow to user
        // add skills, date format, number of comments and likes to the post
        $viewdata['trending_posts'] = $this->get_trending(2);
        return view('home.saves', $viewdata);
    }

    public function post($id){
        $post = DB::table('posts')
                        ->where('posts.id', $id)
                        ->leftJoin('users','posts.user_id','=','users.id')
                        ->select('posts.*', 
                                'users.first_name', 
                                'users.last_name', 
                                'users.username', 
                                'users.profile_picture'
                        )
                        ->first(); // Retrieve the results
        
        //add neccessary datas to post
        /* START */
        $post->skills = DB::table('skill_user')
                                ->where('user_id', $post->user_id)
                                ->leftJoin('skills', 'skill_user.skill_id', '=', 'skills.id')
                                ->select('skills.name','skills.bg_color')
                                ->get();
        $post->date_time = $this->date_format($post->created_at);
        $post->comments = Comment::where('post_id',$post->id)->get();
        //get number of comments
        $comment_num = 0;
        //get number of replies
        foreach($post->comments as $comment) {
            $comment_num += Reply::where('comment_id',$comment->id)->get()->count(); 
        }
        //check if the user liked the post
        $post->liked = PostLike::where('post_id', Auth()->user()->id)->where('user_id', Auth::id())->first();
        //add replies and comments to get total comments
        $post->comments = $post->comments->count() + $comment_num; 
        //get number of likes
        $post->likes = PostLike::where('post_id',$post->id)->get()->count(); 
        //get number of shares
        $post->shares = Share::where('post_id',$post->id)->get()->count();
        /* END */

        //get comments
        /* START */
        $comments = Comment::where('post_id',$id)->get(['comment', 'image', 'user_id', 'created_at','id']);
        //get number of comments
        
        if($comments != null) {
            foreach($comments as $comment) {
                //change the comment of date to human readable
                $comment->date_time = $this->date_format($comment->created_at);
                //get commenter
                $comment->user = User::where('id', $comment->user_id)->firstOrFail(['id', 'first_name', 'last_name', 'profile_picture', 'username']);
                //get skills of commenter
                $comment->user->skills =  $comment->user->skills()->orderBy('name')->get();
                //get replies
                $comment->replies = Reply::where('comment_id',$comment->id)->get(['reply','comment_id','user_id','created_at','id']);
                //get number of likes for each comment
                $comment->likes = CommentLike::where('comment_id',$comment->id)->get()->count();

                if(!$comment->replies->isEmpty()) {
                    //get date huamn readable date format for each comment
                    foreach($comment->replies as $reply) {
                        //get human readable date for each reply
                        $reply->date_time = $this->date_format($reply->created_at);
                        //get user info for each reply
                        $reply->user = User::where('id', $reply->user_id)->firstOrFail(['id', 'first_name', 'last_name', 'profile_picture', 'username']);
                        //get user skills for each reply
                        $reply->user->skills = $reply->user->skills()->orderBy('name')->get();
                        //get total likes for each reply
                        $reply->likes = ReplyLike::where('reply_id',$reply->id)->get()->count();
                    }
                }         
            }

            // Sort comments by number of likes in descending order
            $comments = $comments->sortByDesc('likes');
        }
        /* END */

        //get likers
        /* START */
        $likers = PostLike::where('post_id',$id)->get('user_id');
        $likers_array = [];
        foreach($likers as $liker) {
            $user = User::where('id', $liker['user_id'])->firstOrFail(['first_name', 'last_name', 'profile_picture', 'username','id']);
            
            $ifFollowed = Follower::where('user_id', Auth::user()->id)->where('following_id', $liker['user_id'])->first(['accepted']);
            
            if(isset($ifFollowed)) {
                if($ifFollowed['accepted'] == true) {
                    //if the user already following the liker
                    $user->ifFollowed = 'following';
                }
                else {
                    //if the user already requested to follow the liker
                    $user->ifFollowed = 'requested';
                }
            }
            else {
                $user->ifFollowed = 'not_following';
            }
        
            if($user->id == Auth::user()->id) {
                $user->ifFollowed = 'self';
            }
            array_push($likers_array, $user);
        }
        /* END */

           
        $viewdata['comments'] = $comments;
        $viewdata['likers'] = $likers_array;
        $viewdata['post'] = $post;
        $viewdata['suggest_users'] = $this->suggest_users(); //suggest which users to follow to user
        // add skills, date format, number of comments and likes to the post
        $viewdata['trending_posts'] = $this->get_trending(2);
        return view('home.view_post',$viewdata);
    }

}
