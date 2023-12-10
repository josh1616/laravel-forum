<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Comment;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Rule;

class SubmitComments extends Component
{

    public Post $post;
    public Comment $comment;

    #[Rule('required|max:255')]
    public string $inputComment;

    public function submitComment() {
        $this->validate();
        
        $this->post->comments()->create([
            'text' => $this->inputComment,
            'user_id' => auth()->id(),
        ]);
        $this->reset('inputComment');
    }

    #[computed()]
    public function comments() {
        return $this->post->comments()->latest();
    }
    
    public function render()
    {
        $post = Post::findOrFail($this->post->id);
        $comments = $post->comments->sortByDesc('created_at');
        return view('livewire.submit-comments', compact('comments','post'))->with('message', 'Comment created');
    }
}
