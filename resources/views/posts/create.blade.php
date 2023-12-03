@extends('layouts.default')

@section('header')
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
@endsection

@section('content')
    
    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        <label for="text">Text</label>
        <input type="text" id="text" name="text" value="{{ old('text') }}">
        <br>
        {{-- <label for="likes">Likes</label>
        <input type="text" id="likes" name="likes" value="{{ old('likes') }}">
        <br>
        
        <label for="dislikes">Dislikes</label>
        <input type="text" id="dislikes" name="dislikes" value="{{ old('dislikes') }}">
        <br> --}}
        <label for="id">Id</label>
        <input type="text" id="id" name="id" value="{{ old('id') }}">
        <br>
        <label for="id">User id</label>
        <input type="text" id="user_id" name="user_id" value="{{ old('user_id') }}">
        <br>
        <input type="submit" value="Submit">
        <br>
    </form>

@endsection

