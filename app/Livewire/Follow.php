<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Follower;
use Illuminate\Support\Facades\Auth;

class Follow extends Component
{
    public $liker_id;
    public $ifFollowed;

    public function mount($liker_id, $ifFollowed) {
        $this->liker_id = $liker_id;
        $this->$ifFollowed = $ifFollowed;
    }

    public function toggleFollow() {

        $this->validate([
            'liker_id' => 'required|numeric'
        ]);

        $link = Follower::where('user_id', Auth::user()->id)
                        ->where('following_id', $this->liker_id)
                        ->first(['id','user_id','following_id','accepted']);
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
            $follow->following_id = $this->liker_id; // Correct attribute name
            $follow->save();
            $this->ifFollowed = 'requested';
        }

    }

    public function render()
    {
        return view('livewire.follow');
    }
}
