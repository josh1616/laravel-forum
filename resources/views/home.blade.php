@extends('layouts.app')

@section('header')
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
@endsection


@section('content')
    <div class="flex justify-between">
        <h1 class="text-3xl	text-black mb-12">Your feed</h1>
        <div class="pb-12">
        <a href="{{route('posts.create')}}" class="bg-green-400 text-base rounded-full text-black text-base inline-block py-2 px-5">
            Create post
        </a>
    </div>
    </div>
    
    <div class="border border border-gray-300 rounded-3xl p-6 mb-8 max-w-3xl flex flex-col ease-linear duration-150 hover:border-black hover:cursor-pointer">
        <div class="flex items-center mb-4">
            <img src="\img\profile-pic.png" alt="profile picture" class="mr-2.5">
            <p class="inline-block text-black text-base mr-2.5">Joshua Richardson</p>
            <p class="inline-block text-gray-800 text-base">19/10/2023</p>
        </div>
        <p class="text-2xl text-black mb-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            incididunt ut labore et dolore magna aliqua. Ut enim ad
            exercitation ullamco laboris nisi ut aliquip ex ea commo.
        </p>
        <div class="mb-4 max-h-80 overflow-y-hidden rounded-2xl w-full">
            <img src="\img\post-demo-picture.jpg" alt="picture related to post" class="rounded-2xl w-full">
        </div>
        <div class="flex">
            <div class="py-1 px-4 bg-green-200 rounded-full flex mr-3.5">
                <img src="\img\upvote.svg" alt="upvote" class="mr-2">
                <p>3</p>
            </div>
            <div class="py-1 px-4 bg-red-200 rounded-full flex mr-3.5">
                <img src="\img\downvote.svg" alt="upvote" class="mr-2">
                <p>2</p>
            </div>
            <div class="py-1 px-4 bg-gray-200 rounded-full flex">
                <img src="\img\message.svg" alt="message icon" class="mr-2">
                <p class="text-black text-base">3 comments</p>
            </div>
        </div>
    </div>
    
    @foreach ($posts as $post)
    {{-- replace manual link !bad --}}
        <a href="/posts/{{$post->id}}" class="border border-1 border-gray-300 rounded-3xl p-6 mb-8 max-w-3xl flex flex-col ease-linear duration-150 hover:border-black hover:cursor-pointer">
                <div class="flex items-center mb-4">
                    <img src="\img\profile-pic.png" alt="profile picture" class="mr-2.5">
                    <p class="inline-block text-black text-base mr-2.5">{{$post->user->name}}</p>
                    <p class="inline-block text-gray-800 text-base">{{$post->created_at}}</p>
                </div>
                <p class="text-2xl text-black mb-4">
                    {{$post->text}}
                </p>
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

    {{ $posts->links()}}
@endsection