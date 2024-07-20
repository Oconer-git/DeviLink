<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Follower;
use App\Models\Comment;
use App\Models\PostLike;
use App\Models\Reply;
use Carbon\Carbon;
use App\Models\Share;

trait SharedMethods
{
    public function suggest_users() {
         // Get the current authenticated user ID
         $auth_id = Auth::id();

         // Get a collection of suggested users excluding the authenticated user and those already followed
         $suggestedUsers = DB::table('users')
             ->select('id', 'first_name', 'last_name', 'profile_picture', 'username')
             ->where('id', '!=', $auth_id)
             ->whereNotIn('id', function($query) use ($auth_id) {
                 $query->select('following_id')
                       ->from('followers')
                       ->where('user_id', $auth_id);
             })
             ->orderBy('created_at', 'desc')
             ->limit(3)
             ->get();
 
         return $suggestedUsers;
    }

    public function populate_post($all_posts) {
        foreach($all_posts as $post) {
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
        }

        return $all_posts;
    }

    public function get_trending($limit){
        $posts = DB::table('posts')
                    ->where('is_global', true)
                    ->whereNotNull('image')
                    ->where('posts.created_at', '>', Carbon::now()->subWeek()) // Filter posts created in the last week
                    ->leftJoin('users', 'posts.user_id', '=', 'users.id')
                    ->leftJoin('postlikes', 'postlikes.post_id', '=', 'posts.id')
                    ->select(
                        'posts.*', 
                        'users.first_name', 
                        'users.last_name', 
                        'users.username', 
                        'users.profile_picture',
                        DB::raw('COUNT(postlikes.post_id) as likes') //get lieks
                    )
                    ->groupBy('posts.id', 'users.id') // Grouping by the primary keys of the posts and users tables
                    ->orderBy('likes', 'desc')
                    ->limit($limit) // Limits the number of results to 2
                    ->get();

        foreach($posts as $post) {
            $post->content = substr($post->content,0,74) .'....';
        }
        return $posts;
    }

    public function date_format($date) {
        $timestamp = strtotime($date);
        $current_timestamp = time();
        $difference = $current_timestamp - $timestamp;
    
        if ($difference < 60) {
            return "Just now";
        } elseif ($difference < 3600) {
            $minutes = floor($difference / 60);
            return $minutes . " minutes ago";
        } elseif ($difference < 86400) {
            $hours = floor($difference / 3600);
            return $hours . " hours ago";
        } elseif ($difference < 172800) { // 1 day (24 hours)
            return "1 day ago";
        } elseif ($difference < 259200) { // 2 days
            return "2 days ago";
        } elseif ($difference < 345600) { // 3 days
            return "3 days ago";
        } elseif ($difference < 432000) { // 4 days
            return "4 days ago";
        } elseif ($difference < 518400) { // 5 days
            return "5 days ago";
        } elseif ($difference < 604800) { // 6 days
            return "6 days ago";
        } elseif ($difference < 1209600) { // 1 week
            return "1 week ago";
        } else {
            // Set it to readable date
            return date('F j, Y', $timestamp);
        }
    }
}
