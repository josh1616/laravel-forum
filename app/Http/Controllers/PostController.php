<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $posts = Post::latest()->cursorPaginate(5);
        return view('home', ['posts' => $posts]);
        

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate ([
            'text' => 'required|max:255',
        ]);

        $validatedData['user_id'] = auth()->id();

        Post::create($validatedData);

        $posts = Post::cursorPaginate(5);

        return view('home', ['posts' => $posts]);
    }

    /**
     * Display the specified resource.
     */
    //can send comment numbers here also 
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        $comments = $post->comments;
        //$comments = Comment::where('post_id', $id)->get();
        return view('posts.show', ['post' => $post, 'comments' => $comments]);
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
