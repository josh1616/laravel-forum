@extends('layouts.app')

@section('header')
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
@endsection

@section('content')
<div class="flex items-center border-b border-gray-300 pb-6 mb-6">
    <img src="\img\profile-pic.png" class="h-16 w-16 mr-6">
    <p class="text-2xl text-black">{{$users->name}}</p>
</div>
    {{-- <div class="mb-12">
        <button class="bg-green-400 text-base rounded-full text-black text-base inline-block py-2 px-5 mr-4 hover:bg-green-400">Posts</button>
        <button class="bg-green-200 text-base rounded-full text-black text-base inline-block py-2 px-5 hover:bg-green-400">Comments</button>
    </div> --}}
    <div id="posts" class="mb-6">
        <h2 class="text-2xl text-black mb-6">Posts</h2>
        @foreach ($posts as $post)
        {{-- replace manual link !bad --}}
            <a href="/posts/{{$post->id}}" class="border border-1 border-gray-300 rounded-3xl p-6 mb-8 max-w-3xl flex flex-col ease-linear duration-150 hover:border-black hover:cursor-pointer">
                    <div class="flex items-center mb-4">
                        <img src="\img\profile-pic.png" alt="profile picture" class="mr-2.5">
                        <object>
                            <a href="{{route('profile.show', ['id' => $users->id])}}">
                                <p class="inline-block text-black text-base mr-2.5 relative z-50 hover:underline">{{$post->user->name}}</p>
                            </a>
                        </object>
                        <p class="inline-block text-gray-800 text-base">{{$post->created_at}}</p>
                    </div>
                    <p class="text-2xl text-black mb-4">
                        {{$post->text}}
                    </p>

                    @if(!is_null($post->image)) 
                        <div class="mb-4 max-h-96 overflow-y-hidden rounded-2xl w-full border border-gray-200">
                            <img src="{{ asset('storage/' . $post->image)}}" alt="picture related to post" class="rounded-2xl w-full">
                        </div>
                    @endif
                    
                    <div class="flex">
                        <div class="py-1 px-4 bg-green-200 rounded-full flex mr-3.5">
                            <img src="\img\upvote.svg" alt="upvote" class="mr-2">
                            <p>{{$post->likes}}</p>
                        </div>
                        <div class="py-1 px-4 bg-red-200 rounded-full flex mr-3.5">
                            <img src="\img\downvote.svg" alt="upvote" class="mr-2">
                            <p>{{$post->dislikes}}</p>
                        </div>
                        <div class="py-1 px-4 bg-gray-200 rounded-full flex">
                            <img src="\img\message.svg" alt="message icon" class="mr-2">
                            <p class="text-black text-base">{{$post->comments->count()}}</p>
                        </div>
                    </div>
            </a>
        @endforeach
    </div>

    <div id="comments">
        <h2 class="text-2xl text-black mb-6">Comments</h2>

        @include('comments.comments')
    </div>

    
@endsection

<script>
    const posts = document.getElementById('posts');
    const comments = document.getElementById('comments');

    comments.style.display = 'none';
    posts.style.display = 'none';
</script>