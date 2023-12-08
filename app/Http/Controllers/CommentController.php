<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
#use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $post_id)
    {

        $validatedData = $request->validate ([
            'text' => 'required|max:255',
        ]);

        $validatedData['user_id'] = auth()->id();
        $validatedData['post_id'] = $post_id;

        Comment::create($validatedData);

        $post = Post::findOrFail($post_id);
        $comments = $post->comments->sortByDesc('created_at');
        //$comments = Comment::where('post_id', $id)->get();
        // return view('posts.show', ['post' => $post, 'comments' => $comments]);

        return redirect('posts/'. $post_id)->with('message', 'Post created');
    }

    /**
     * Display the specified resource.
     */
    //can send comment numbers here also 
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
