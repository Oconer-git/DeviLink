<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserPosts extends Component
{
    use WithPagination;

    public $user_id;
    public $page = 1;
    public $posts = []; // Accumulate posts here

    public function mount()
    {
        $this->user_id = Auth::id();
        $this->load_more(); // Load initial posts
    }

    public function load_more()
    {
        $global_posts = DB::table('posts')
            ->where('is_global', true)
            ->leftJoin('users', 'posts.user_id', '=', 'users.id')
            ->leftJoin('comments', 'posts.id', '=', 'comments.post_id')
            ->leftJoin('postlikes', 'posts.id', '=', 'postlikes.post_id')
            ->leftJoin('shares', 'posts.id', '=', 'shares.post_id')
            ->select('posts.*', 
                     'users.first_name', 
                     'users.last_name', 
                     'users.username', 
                     'users.profile_picture',
                     DB::raw('COUNT(distinct comments.id) as comments'),
                     DB::raw('COUNT(distinct postlikes.id) as likes'),
                     DB::raw('COUNT(distinct shares.id) as shares'),
                     DB::raw('2 as priority'))
            ->groupBy('posts.id', 'users.id')
            ->orderBy('created_at', 'desc')
            ->paginate(6, ['*'], 'page', $this->page);

        foreach($global_posts as $post) {
            $post->created_at = $this->date_format($post->created_at);
            $post->skills = DB::table('skill_user')
                                ->where('user_id', $post->user_id)
                                ->leftJoin('skills', 'skill_user.skill_id', '=', 'skills.id')
                                ->select('skills.name','skills.bg_color')
                                ->get();
        }
        // Accumulate posts
        $this->posts = array_merge($this->posts, $global_posts->items());
        $this->page++;
    }

    public function render()
    {
        return view('livewire.user-posts', [
            'posts' => $this->posts
        ]);
    }

    public function date_format($date) {
        $timestamp = strtotime($date);
        $current_timestamp = time();
        $difference = $current_timestamp - $timestamp;
    
        if ($difference < 60) {
            return "Just now";
        } elseif ($difference < 3600) {
            $minutes = floor($difference / 60);
            return $minutes == 1 ? "1 minute ago" : "$minutes minutes ago";
        } elseif ($difference < 86400) {
            $hours = floor($difference / 3600);
            return $hours == 1 ? "1 hour ago" : "$hours hours ago";
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
