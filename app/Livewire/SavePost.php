<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Save;


class SavePost extends Component
{
    public $if_saved;
    public $post_id;

    public function mount($post_id) {
        $this->if_saved = $this->check_if_saved($post_id);
        $this->post_id = $post_id;
    }

    public function toggleSave() {
        $this->validate([
            'post_id' => 'required|numeric'
        ]);

        $saved_post = new Save;
        $saved_post->user_id = Auth::id();
        $saved_post->post_id = $this->post_id;
        $saved_post->save();
        $this->if_saved = true;
    }

    private function check_if_saved($post_id) {
        $if_saved = Save::where('post_id', $post_id)
                          ->where('user_id',Auth::id())
                          ->exists();
        return $if_saved;
    }

    public function render()
    {
        return view('livewire.save-post');
    }
}
