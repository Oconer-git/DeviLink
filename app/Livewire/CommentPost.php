<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use App\Models\Comment;
use App\Models\Reply;

class CommentPost extends Component
{
    use WithFileUploads;

    public $post_id;
    public $comments = [];
    public $comment;
    public $image;
    public $comment_id;
    public $reply_content;
    public $key_comment;

    protected $rules = [
        'post_id' => 'required|numeric',
        'comment' => 'required_without:image|max:5049',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    public function updatedImage()
    {
        $this->validateOnly('image');
    }

    public function comment_post()
    {
        $validatedData = $this->validate();

        $comment = new Comment;
        $comment->post_id = $this->post_id;
        $comment->comment = $this->comment;
        $comment->user_id = Auth::id();
    
        if ($this->image) {
            // Store the uploaded file
            $path = $this->image->store('public/images/comments');
            // Save the image path
            $comment->image = str_replace('public/', 'storage/', $path);
        }
    
        $comment->save();

        // Get the latest comment of user to show it
        $this->comments[] =  DB::table('comments')
                            ->where('user_id', Auth::id())
                            ->latest()
                            ->select('comment', 'id', 'image', DB::raw('0 as show_reply_form')) //for showing reply form
                            ->first();

        //create empty reply array
        $latest_comment_index = count($this->comments) - 1;
        $this->comments[$latest_comment_index]->replies = [];      

        // Reset inputs
        $this->reset(['comment', 'image']);
    }

    public function submit_reply() {

        $validated = $this->validate([
            'comment_id' => 'required|numeric',
            'reply_content' => 'required|string'
        ]);

        $reply = new Reply();
        $reply->comment_id = $validated['comment_id'];
        $reply->reply = $validated['reply_content'];
        $reply->user_id = Auth::id();
        $reply->save();

        // Fetch the newly created reply with the necessary attributes
        $latest_reply = Reply::where('user_id', Auth::id())
            ->latest()
            ->first(['reply', 'id']);

        // Add the new reply to the appropriate comment
        $commentIndex = array_search($validated['comment_id'], array_column($this->comments, 'id'));

        if ($commentIndex !== false) {
            $this->comments[$commentIndex]->replies[] = $latest_reply;
        }

        // Reset reply content after submission
        $this->reset('reply_content');
    }

    //for showing reply form in each comment
    public function show_reply($key){
        $this->comments[$key]->show_reply_form = !$this->comments[$key]->show_reply_form;
        
        if($this->comments[$key]->show_reply_form) {
            $this->comments[$key]->show_reply_form = false;
        }
        else {
            $this->comments[$key]->show_reply_form = true;
        }
    }
    
    public function render()
    {
        return view('livewire.comment-post');
    }
}
