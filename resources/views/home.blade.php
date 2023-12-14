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
    
    @include('posts.posts')
@endsection