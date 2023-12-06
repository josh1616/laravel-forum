@extends('layouts.app')

@section('header')
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$post->text}}</title>
@endsection

@section('content')
    {{-- <h1 class="text-3xl	text-black mb-12">{{$post->id}}</h1> --}}
    <div class="border-b border-gray-300 mb-12 w-full">
        <div class="border border-1 border-gray-300 rounded-3xl p-6 mb-12 max-w-3xl flex flex-col w-full">
            <div class="flex items-center mb-4">
                <img src="\img\profile-pic.png" alt="profile picture" class="mr-2.5">
                <p class="inline-block text-black text-base mr-2.5">{{$post->user->name}}</p>
                <p class="inline-block text-gray-800 text-base">{{$post->created_at}}</p>
            </div>
            <p class="text-2xl text-black mb-4">
                {{$post->text}}
            </p>
            <div class="mb-4 max-h-96 overflow-y-hidden rounded-2xl w-full border border-gray-200">
                <img src="{{ asset('storage/' . $post->image)}}" alt="picture related to post" class="rounded-2xl w-full">
            </div>
            <div class="flex">
                <div class="py-1 px-4 bg-green-200 rounded-full flex mr-3.5">
                    <img src="\img\upvote.svg" alt="upvote" class="mr-2">
                    <p>{{$post->likes}}</p>
                </div>
                <div class="py-1 px-4 bg-red-200 rounded-full flex mr-3.5">
                    <img src="\img\downvote.svg" alt="upvote" class="mr-2">
                    <p>{{$post->dislikes}}</p>
                </div>
            </div>
        </div>
    </div>

    <div>
        <h1 class="text-3xl text-black pb-6">{{$post->comments->count()}} comments</h1>
    </div>

    <form action="{{ route('posts.comments.store',$post->id,['post_id' => $post->id])}}" method="POST">
        @csrf
        <textarea rows="4" type="text" id="text" name="text" value="{{ old('text') }}" class="w-full border-1 border-gray-300 rounded-3xl mb-2"></textarea>
        <input type="submit" value="Submit" class="bg-green-400 text-base rounded-full text-black text-base inline-block py-2 px-5 mb-12">
    </form>

    @include('comments.comments')
@endsection