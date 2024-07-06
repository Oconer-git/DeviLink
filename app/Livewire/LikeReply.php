<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\ReplyLike;
class LikeReply extends Component
{
    public $reply_id;
    public $reply_likes;
    public $liked;

    public function mount($reply_id, $reply_likes)
    {
        $this->reply_id = $reply_id;
        $this->reply_likes = $reply_likes;
        $this->liked = $this->checkIfLiked();
    }

    public function toggleLike()
    {
        $this->validate([
            'reply_id' => 'required|numeric'
        ]);

        $user_id = Auth::id();
        $liked = ReplyLike::where('reply_id', $this->reply_id)->where('user_id', $user_id)->first();

        if ($liked) {
            // Unlike
            $liked->delete();
            $this->reply_likes--;
        } else {
            // Like
            ReplyLike::create([
                'user_id' => $user_id,
                'reply_id' => $this->reply_id
            ]);
            $this->reply_likes++;
        }

        $this->liked = !$this->liked;
    }

    private function checkIfLiked()
    {
        $user_id = Auth::id();
        return ReplyLike::where('reply_id', $this->reply_id)->where('user_id', $user_id)->exists();
    }

    public function render()
    {
        return view('livewire.like-reply');
    }
}
