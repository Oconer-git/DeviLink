<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Follower;
use Illuminate\Support\Facades\Auth;

class AcceptFollower extends Component
{
    public $follower_id;
    public $accepted;

    public function mount($follower_id) {
        $this->$follower_id = $follower_id;
    }

    public function submit($action) {
        $this->validate([
            'follower_id' => 'required|numeric'
        ]);

        $follower = Follower::where('following_id',Auth::user()->id)->where('user_id',$this->follower_id)->firstOrFail();

        if($action == 'accept') {
            $this->accepted = 'accepted';
            $follower->accepted = true;
        
        } 
        else if($action == 'reject') {
            $this->accepted = 'rejected';
            $follower->delete();
        }
        $follower->save();
    }

    public function render()
    {
        return view('livewire.accept-follower');
    }
}
