<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Follower;

class SuggestedFollow extends Component
{
    public $user_id;
    public $ifRequested;

    public function toggleFollow() {
        $this->validate(['user_id' => 'required|numeric']);

        $link = Follower::where('user_id',Auth::id())
                                ->where('following_id', $this->user_id)
                                ->first();
        if($link) {
            $link->delete();
            $this->ifRequested = false;
        }
        else {
            $link = new Follower;
            $link->user_id = Auth::id();
            $link->following_id = $this->user_id;
            $link->save();
            $this->ifRequested = true;
        }
        //check if requested, 
        //if the user id and follower id exists in follower db then cancel, ifRequested will be false

        //if the user id and follower id does not exists then create in followerdb, ifRequsted will be true
    }
    public function render()
    {
        return view('livewire.suggested-follow');
    }
}
