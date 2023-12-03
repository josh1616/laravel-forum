@extends('layouts.app')

@section('header')
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
@endsection

@section('content')

    <h1 class="text-3xl	text-black mb-12">Create a post</h1>
    
    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        <textarea rows="10" type="text" id="text" name="text" value="{{ old('text') }}" class="w-full border-1 border-gray-300 rounded-3xl mb-12"></textarea>
        <br>
        {{-- <label for="likes">Likes</label>
        <input type="text" id="likes" name="likes" value="{{ old('likes') }}">
        <br>
        
        <label for="dislikes">Dislikes</label>
        <input type="text" id="dislikes" name="dislikes" value="{{ old('dislikes') }}">
        <br> --}}
        {{-- <label for="id">Id</label>
        <input type="text" id="id" name="id" value="{{ old('id') }}">
        <br>
        <label for="id">User id</label>
        <input type="text" id="user_id" name="user_id" value="{{ old('user_id') }}">
        <br> --}}
        <input type="submit" value="Submit" class="bg-green-400 text-base rounded-full text-black text-base inline-block py-2 px-5">
        <br>
    </form>

@endsection