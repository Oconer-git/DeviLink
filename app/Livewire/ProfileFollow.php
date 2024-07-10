<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Follower;


class ProfileFollow extends Component
{
    public $user_id;
    public $ifFollowed;

    public function mount($user_id, $ifFollowed) {
        $this->user_id = $user_id;
        $this->ifFollowed = $ifFollowed;
    }

    public function toggleFollow() {

        $this->validate([
            'user_id' => 'required|numeric'
        ]);

        $link = Follower::where('user_id', Auth::user()->id)->where('following_id', $this->user_id)->first(['id','user_id','following_id','accepted']);
        if ($link) {
            if ($link->accepted) {
                // If the user is already following the liker, then unfollow
                $link->delete();
                $this->ifFollowed = 'not_following';
            } else {
                // If the user already requested to follow, then cancel the request
                $link->delete();
                $this->ifFollowed = 'not_following';
            }
        } else {
            // If the user is not following, then follow
            $follow = new Follower;
            $follow->user_id = Auth::user()->id;
            $follow->following_id = $this->user_id; // Correct attribute name
            $follow->save();
            $this->ifFollowed = 'requested';
        }

    }

    public function render()
    {
        return view('livewire.profile-follow');
    }
}
