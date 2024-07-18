<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Share;
use Illuminate\Support\Facades\Auth;

class SharePost extends Component
{
    public $post_id;
    public $if_shared;
    public $shares;

    public function mount($post_id) {
        $this->post_id = $post_id;
        $this->if_shared = $this->check_shared($post_id);
    }

    public function toggleShare() {
        $this->validate([
            'post_id' => 'required|numeric'
        ]);

        $shared_post = new Share;
        $shared_post->user_id = Auth::id();
        $shared_post->post_id = $this->post_id;
        $shared_post->save();
        $this->if_shared = $this->check_shared($this->post_id);
    }

    private function check_shared($post_id) {
        $if_shared = Share::where('post_id',$post_id)->where('user_id', Auth::id())->exists();
        return $if_shared;
    }

    public function render()
    {
        return view('livewire.share-post');
    }
}
