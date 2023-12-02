@extends('layouts.default')

@section('header')
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$post->text}}</title>
@endsection

@section('content')
    <h1 class="text-3xl	text-black mb-12">{{$post->id}}</h1>
    <div class="border border-1 border-gray-300 rounded-3xl p-6 mb-8 max-w-3xl flex flex-col">
        <div class="flex items-center mb-4">
            <img src="\img\profile-pic.png" alt="profile picture" class="mr-2.5">
            <p class="inline-block text-black text-base mr-2.5">{{$comments}}</p>
            <p class="inline-block text-gray-800 text-base">19/10/2023</p>
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
                <p class="text-black text-base">3 comments</p>
            </div>
        </div>
    </div>

    <div>
        @foreach($post->comments as $comment)
        {{ $comment->text }}
        @endforeach
    </div>

    
    
    
@endsection