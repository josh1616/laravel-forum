@extends('layouts.app')

@section('page-title', 'Feed')

@section('content')
    <div class="flex justify-between">
        <h1 class="text-3xl	text-black mb-12">Your feed @role('admin') (Admin view) @endrole</h1>
        <div class="pb-12">
            <a href="{{route('posts.create')}}" class="bg-green-400 text-base rounded-full text-black text-base inline-block py-2 px-5 hover:bg-green-500">
                Create post
            </a>
        </div>
    </div>

    <form action="{{ route('index')}}" method="GET">
        <input name="search" type="search" class="w-full border-1 border-gray-300 rounded-3xl mb-6">
        <input type="submit" value="Submit" class="bg-black text-base rounded-full text-white text-base inline-block py-2 px-5 mb-12">
    </form>
    
    @include('posts.posts')
@endsection