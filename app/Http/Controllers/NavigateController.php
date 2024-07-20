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
use App\Http\Controllers\UsersController;
use App\SharedMethods;
class NavigateController extends Controller
{
    use SharedMethods;

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
        
        $viewdata['posts'] = $this->populate_post($global_posts);
        $viewdata['users'] = $users;
        $viewdata['suggest_users'] = $this->suggest_users(); //suggest which users to follow to user
        // add skills, date format, number of comments and likes to the post
        $viewdata['trending_posts'] = $this->get_trending(2);

        return view('home.search',$viewdata);
    }

   

}
