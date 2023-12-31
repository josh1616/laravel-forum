@extends('layouts.app')

@section('page-title', 'Post')

@section('content')
    {{-- <h1 class="text-3xl	text-black mb-12">{{$post->id}}</h1> --}}
    <div class="mb-12 w-full">
        <div class="border border-1 border-gray-300 rounded-3xl p-6 mb-12 max-w-3xl flex flex-col w-full">
            <div class="flex items-center mb-4 justify-between">
                <div class="flex items-center">
                    <img src="\img\profile-pic.svg" alt="profile picture" class="mr-2.5 w-9 h-9">
                    <object>
                        <a href="{{route('profile.show', ['id' => $post->user->id])}}">
                            <p class="inline-block text-black text-base mr-2.5 relative z-50 hover:underline">{{$post->user->name}}</p>
                        </a>
                    </object>
                    <p class="inline-block text-gray-800 text-base">{{$post->created_at}}</p>
                </div>
                @auth
                @if(Auth::id() === $post->user->id || Auth::user()->hasRole('admin'))
                <div class="flex items-center">
                    <p class="mr-2">
                        <a href="{{ route('posts.edit', ['id' => $post->id]) }}">
                            Edit
                        </a>
                    </p>
                    <form method="POST" action="{{ route('posts.delete',['id' => $post->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-700">Delete</button>
                    </form>
                </div>
                @endif
            @endauth
            </div>
            <p class="text-2xl text-black">
                {{$post->text}}
            </p>
            @if(!is_null($post->image)) 
                <div class="mb-4 max-h-96 overflow-y-hidden rounded-2xl w-full border border-gray-200 my-4">
                    <img src="{{ asset('storage/' . $post->image)}}" alt="picture related to post" class="rounded-2xl w-full">
                </div>
            @endif
            {{-- <div class="flex">
                <div class="py-1 px-4 bg-green-200 rounded-full flex mr-3.5">
                    <img src="\img\upvote.svg" alt="upvote" class="mr-2">
                    <p>{{$post->likes}}</p>
                </div>
                <div class="py-1 px-4 bg-red-200 rounded-full flex mr-3.5">
                    <img src="\img\downvote.svg" alt="upvote" class="mr-2">
                    <p>{{$post->dislikes}}</p>
                </div>
            </div> --}}
            
        </div>

        {{-- <div>
            <h1 class="text-3xl text-black pb-6">{{$post->comments->count()}} comments</h1>
        </div>
        
        <form action="{{ route('posts.comments.store',$post->id)}}" method="POST">
            @csrf
            <textarea rows="4" type="text" id="text" name="text" value="{{ old('text') }}" class="w-full border-1 border-gray-300 rounded-3xl mb-2"></textarea>
            <input type="hidden" value="{{$post->user->id}}" name="user_id" />
            <input type="submit" value="Submit" class="bg-green-400 text-base rounded-full text-black text-base inline-block py-2 px-5 mb-12">
        </form>
    
        @include('comments.comments') --}}
    
        @livewire('submit-comments', ['post' => $post, 'user_id' => $post->user_id])

    </div>

    
@endsection