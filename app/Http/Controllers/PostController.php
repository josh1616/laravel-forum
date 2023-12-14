<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->Paginate(8);
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
        #dd($request);
        $validatedData = $request->validate ([
            'text' => 'required|max:255',
        ]);

        if($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('post_img','public');
        }

        $validatedData['user_id'] = auth()->id();

        $post = Post::create($validatedData);

        $id = $post->id;

        return redirect('posts/'. $id)->with('message', 'Post created');
    }

    /**
     * Display the specified resource.
     */
    //can send comment numbers here also 
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        $comments = $post->comments->sortByDesc('created_at');
        //$comments = Comment::where('post_id', $id)->get();
        return view('posts.show', ['post' => $post, 'comments' => $comments, 'id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        $comments = $post->comments->sortByDesc('created_at');
        //$comments = Comment::where('post_id', $id)->get();
        return view('posts.edit', ['post' => $post, 'comments' => $comments, 'id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        // dd($request);
        $validatedData = $request->validate ([
            'text' => 'required|max:255',
        ]);

        if($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('post_img','public');
        }

        $validatedData['user_id'] = auth()->id();

        // Post::where()->update($validatedData);
        // $post = Post::findOrFail($id);
        // $post->update($validatedData);
        // $post = Post::findOrFail($id);
        // $post->where($id === auth()->id())->update($validatedData);

        $post = Post::find($id);
        $post->update($validatedData);
        // Post::update($validatedData);


        return redirect('posts/'. $id)->with('message', 'Post updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/')->with('messageDelete', 'Post deleted');
    }
}
