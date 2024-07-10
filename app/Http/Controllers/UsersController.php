<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Skill;
use App\Models\Follower;
use App\models\Like;
use App\Models\Post;
use App\Models\Comment;
use App\Models\PostLike;
use App\Models\Reply;

class UsersController extends Controller
{
    public function login() {
        return view('users.index');
    }

    public function main() {
        $view_data = array( 'first_name' => auth()->user()->first_name,
                            'last_name' => auth()->user()->last_name);
        return view('home.main', $view_data);
    }

    public function comments() {
        return view('home.comments');
    }

    public function profile($username) {
        // Get username info
        $user = User::where('username', $username)->firstOrFail(['first_name', 'last_name', 'about', 'profile_picture', 'username', 'id']);
        $viewdata['user'] = $user;
    
        // Retrieve unique skills for the specific user
        $user_skills = $user->skills()->pluck('skills.name', 'skills.id');
        
        // Retrieve all skill names and bg_colors from the skills table
        $skills = Skill::pluck('name', 'id');
        $skill_bg_colors = Skill::pluck('bg_color', 'id');
    
        $viewdata['user_skills'] = $user_skills;
        // Combine skills with their respective bg_colors
        foreach ($viewdata['user_skills'] as $id => $name) {
            if (isset($skill_bg_colors[$id])) {
                $viewdata['user_skills'][$id] = ['name' => $name, 'bg_color' => $skill_bg_colors[$id]];
            } else {
                $viewdata['user_skills'][$id] = ['name' => $name, 'bg_color' => null];
            }
        }

        // Filter out the user's skills from all skills to get skills the user doesn't have
        $viewdata['other_skills'] = $skills->diffKeys($user_skills);
        // Combine skills with their respective bg_colors
        foreach ($viewdata['other_skills'] as $id => $name) {
            if (isset($skill_bg_colors[$id])) {
                $viewdata['other_skills'][$id] = ['name' => $name, 'bg_color' => $skill_bg_colors[$id]];
            } else {
                $viewdata['other_skills'][$id] = ['name' => $name, 'bg_color' => null];
            }
        }

        //Retrieve followers of the user
        $followers = Follower::where('following_id',$user->id)->where('accepted', true)->get();
        foreach($followers as $follower) {
            $follower->user_info = User::where('id',$follower->user_id)->first(['id','first_name','last_name','email','username','profile_picture']);
            $ifFollowed = Follower::where('user_id', Auth::user()->id)->where('following_id', $follower->user_info->id)->first(['accepted']);
            
            if(isset($ifFollowed)) {
                if($ifFollowed['accepted'] == true) {
                    //if the user already following the liker
                    $follower->user_info->ifFollowed = 'following';
                }
                else {
                     //if the user already requested to follow the liker
                    $follower->user_info->ifFollowed = 'requested';
                }
            }
            else {
                $follower->user_info->ifFollowed = 'not_following';
            }

            if($follower->user_info->id == Auth::user()->id) {
                $follower->user_info->ifFollowed = 'self';
            }
        }
        $viewdata['followers'] = $followers;

        //retrieve following users
        $followings = Follower::where('user_id',$user->id)->where('accepted', true)->get();
        foreach($followings as $following) {
            $following->user_info = User::where('id',$following->following_id)->first(['id','first_name','last_name','email','username','profile_picture']);
            $ifFollowed = Follower::where('user_id', Auth::user()->id)->where('following_id', $following->user_info->id)->first(['accepted']);
            
            if(isset($ifFollowed)) {
                if($ifFollowed['accepted'] == true) {
                    //if the user already following the liker
                    $following->user_info->ifFollowed = 'following';
                }
                else {
                     //if the user already requested to follow the liker
                    $following->user_info->ifFollowed = 'requested';
                }
            }
            else {
                $following->user_info->ifFollowed = 'not_following';
            }

            if($following->user_info->id == Auth::user()->id) {
                $following->user_info->ifFollowed = 'self';
            }
        }
        $viewdata['followings'] = $followings;

        //retrieve the posts of the user
        $ifFollowing = Follower::where('user_id', Auth::user()->id)
                                ->where('following_id', $user->id)
                                ->where('accepted',true)->exists();
        if($ifFollowing) {
            //when following the user retrieve this
            $posts = Post::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        }
        else {
            //when not following the user retrieve this
            $posts = Post::where('user_id', $user->id)
                            ->where('is_global',true)
                            ->orderBy('created_at','desc')->get();
        }
        foreach($posts as $post) {
            $post->likes = PostLike::where('post_id',$post->id)->get()->count(); //get number of likes
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
            $post->date_time = $this->date_format($post->created_at);
        }
        $viewdata['posts'] = $posts;

        //get the total likes of the user;
        $likes = 0;
        foreach($posts as $post) {
            $likes += PostLike::where('post_id',$post->id)->get()->count();
        }
        $viewdata['likes'] = $likes;

        if($username == Auth::user()->username) {
                return view('users.own_profile', $viewdata);
            }
        else {
            return view('users.profile', $viewdata);
        }

    }

    // for registering user account
    public function register(Request $request): RedirectResponse {
        $validated = $request->validate([
            'first_name' => 'required|string|alpha:ascii|max:20|min:2',
            'last_name' => 'required|string|alpha:ascii|max:20|min:2',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|string|min:3|max:20|unique:users,username|alpha_num:ascii|alpha_dash:ascii',
            'password' => 'required|string|min:7|confirmed',
        ]);

        $validated['profile_picture'] = 'storage/images/profiles/default_profile.jpg';
        $validated['password'] = bcrypt($validated['password']);
        $user = User::create($validated);
        auth()->login($user);

        //set zero for updating foreign key checks
        $check = 0;
        DB::statement('SET GLOBAL FOREIGN_KEY_CHECKS = ?;',[$check]);

        return redirect('/');
    } 

    // for logging in user
    public function login_user(Request $request): RedirectResponse {
        //set zero for updating foreign key checks
        $check = 0;
        DB::statement('SET GLOBAL FOREIGN_KEY_CHECKS = ?;',[$check]);

        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($validated)) {
            $request->session()->regenerate();
            DB::statement('SET GLOBAL FOREIGN_KEY_CHECKS=0;');
            return redirect('/')->with('welcome_message','Welcome back!');
        }
        else{
            return redirect()->back()->with('error','No account found. Please register first');
        }
    }

    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
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

    public function testing() {
        //Retrieve followers of the user
        $ifFollowing = Follower::where('user_id',13)
                                ->where('following_id',14)
                                ->where('accepted',true)->exists();
        if($ifFollowing) {
            //when following the user retrieve this
            $posts = Post::where('user_id',14)->get();
        }
        else {
            //when not following the user retrieve this
            $posts = Post::where('user_id',14)->where('is_global',true)->get();
        }
    }
}
