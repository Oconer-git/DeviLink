<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Reply;
use App\Models\ReplyLike;

class ReplyComment extends Component
{   
    public $comment_id;
    public $replies = [];
    public $reply_ids = [];
    public $reply_content;
    public $latest_reply;

    public function submit_reply(){
        if($this->reply_content) {
            $validated = $this->validate([
                'comment_id' => 'required|numeric',
                'reply_content' => 'required|string'
            ]);

            $reply = new Reply;
            $reply->comment_id = $validated['comment_id'];
            $reply->reply = $validated['reply_content'];
            $reply->user_id = Auth::id();
            $reply->save();
    
            $latest_reply = Reply::where('user_id', Auth::id())->latest()->get(['reply', 'id'])->first();

            $this->replies[] = $latest_reply;
            $this->reply_content = '';
        }
    }

    public function render()
    {
        return view('livewire.reply-comment');
    }
}
