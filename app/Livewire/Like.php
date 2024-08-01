<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Postlike;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Like extends Component
{
    public $post_id;
    public $likes_post;
    public $liked;
    public $is_view_post;
    public $is_home;

    public function mount($post_id, $likes_post)
    {
        $this->post_id = $post_id;
        $this->likes_post = $likes_post;
        $this->liked = $this->checkIfLiked();
    }

    public function toggleLike()
    {
        $this->validate([
            'post_id' => 'required|numeric'
        ]);

        $user_id = Auth::id();
        $liked = PostLike::where('post_id', $this->post_id)->where('user_id', $user_id)->first();

        if ($liked) {
            // Unlike
            $liked->delete();
            $this->likes_post--;
        } else {
            // Like
            PostLike::create([
                'user_id' => $user_id,
                'post_id' => $this->post_id
            ]);
            $this->likes_post++;
        }

        $this->liked = !$this->liked;
    }

    private function checkIfLiked()
    {
        $user_id = Auth::id();
        return PostLike::where('post_id', $this->post_id)->where('user_id', $user_id)->exists();
    }

    public function render()
    {
        return view('livewire.like');
    }
}
