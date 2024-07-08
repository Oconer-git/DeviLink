<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use PhpParser\Node\Expr\AssignOp\Pow;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\PostLike;
use App\Models\Comment;
use App\Models\Reply;
use App\Models\ReplyLike;
use App\Models\CommentLike;
use App\Models\Follower;
use DateTime;

class UserPostCommentController extends Controller
{
    public function post(Request $request) {
        $post = new Post;

        //validation
        $request->validate([
            'is_global' => 'boolean',
            'content' => 'required|string|max:5776',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //for picture
        if ($request->hasFile('picture')) {
            // Store the uploaded file
            $path = $request->file('picture')->store('public/images/posts');
            // Upload the image
            $post->image = str_replace('public/', 'storage/', $path);
        }

        $post->content = $request->content;
        $post->user_id = Auth::user()->id;   
        $post->save();
        return redirect()->back();
    }

    public function view_post($id) {
        //post info
        $post = Post::findOrFail($id);
        //user info
        $poster = User::where('id', $post->user_id)->firstOrFail(['first_name', 'last_name', 'profile_picture', 'username','id']);
        //user skills
        $skills = $poster->skills()->orderBy('name')->get();
        //get likers
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
        //see if user liked the post
        $liked = PostLike::where('post_id',$id)->where('user_id', Auth::user()->id)->first();
        //get comments
        $comments = Comment::where('post_id',$id)->get(['comment', 'image', 'user_id', 'created_at','id']);
    
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
        }

        //get the data and time the post was posted
        $date_posted = $this->date_format($post->created_at);

        $view_data = [
                      'post' => $post,
                      'poster' => $poster,
                      'skills' => $skills,
                      'likers' => $likers_array,
                      'comments' => $comments
                     ];
        
        return view('home.comments',$view_data)
                    ->with('date_posted',$date_posted)
                    ->with('likes_post',$likers->count())
                    ->with('liked',$liked);
    }

    public function like_post(Request $request) {
        //validated post_id
        $validate = $request->validate(['post_id' => 'required|numeric']);

        //check if liked
        $user_id = Auth::user()->id;
        $liked = PostLike::where('post_id',$request->post_id)->where('user_id', $user_id)->first();

        if($liked != null) {
            //unlike
            $liked->delete();
        }
        else{
            $like = new PostLike;
            $like->user_id = $user_id;
            $like->post_id = $validate['post_id'];
            $like->save();
        }
        return redirect()->back();
    }

    public function comment(Request $request) {
        $validate = $request->validate([
            'post_id' => 'required|numeric',
            'comment' => 'required|string|max:5049',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $comment = new Comment;
        $comment->post_id = $validate['post_id'];
        $comment->comment = $validate['comment'];
        $comment->user_id = Auth::user()->id;

        if ($request->hasFile('image')) {
            // Store the uploaded file
            $path = $request->file('image')->store('public/images/comments');
            // Upload the image
            $comment->image = str_replace('public/', 'storage/', $path);
        }

        $comment->save();

        return redirect()->back();
    }

    public function reply(Request $request) {
        $validated = $request->validate([
            'comment_id' => 'required|numeric',
            'reply' => 'required|max:5069'
        ]);

        $reply = new Reply;
        $reply->comment_id = $validated['comment_id'];
        $reply->reply = $validated['reply'];
        $reply->user_id = Auth::user()->id;
        $reply->save();

        return redirect()->back();

    }

    private function date_format($date) {
        $timestamp = strtotime($date);
        $current_timestamp = time(); // current timestamp
        $difference = $current_timestamp - $timestamp;

        if ($difference < 60) {
            return "Just now";
        } elseif ($difference < 3600) {
            $minutes = floor($difference / 60);
            return $minutes." minutes ago";
        } elseif ($difference < 86400) {
            $hours = floor($difference / 3600);
            return $hours." hours ago";
        } else {
            //set it to readable date
            return date('F j, Y', $timestamp);
        }
    }
}
