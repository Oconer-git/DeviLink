<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\CommentLike;

class LikeComment extends Component
{
    public $comment_id;
    public $comment_likes;
    public $liked;

    public function mount($comment_id, $comment_likes)
    {
        $this->comment_id = $comment_id;
        $this->comment_likes = $comment_likes;
        $this->liked = $this->checkIfLiked();
    }

    public function toggleLike()
    {
        $this->validate([
            'comment_id' => 'required|numeric'
        ]);

        $user_id = Auth::id();
        $liked = CommentLike::where('comment_id', $this->comment_id)->where('user_id', $user_id)->first();

        if ($liked) {
            // Unlike
            $liked->delete();
            $this->comment_likes--;
        } else {
            // Like
            CommentLike::create([
                'user_id' => $user_id,
                'comment_id' => $this->comment_id
            ]);
            $this->comment_likes++;
        }

        $this->liked = !$this->liked;
    }

    private function checkIfLiked()
    {
        $user_id = Auth::id();
        return CommentLike::where('comment_id', $this->comment_id)->where('user_id', $user_id)->exists();
    }

    public function render()
    {
        return view('livewire.like-comment');
    }
}
