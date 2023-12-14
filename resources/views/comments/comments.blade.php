@foreach ($comments as $comment)

<div class="border border-1 border-gray-300 rounded-3xl p-6 mb-8 max-w-3xl flex flex-col">
    <div class="flex items-center mb-4">
        <img src="\img\profile-pic.svg" alt="profile picture" class="mr-2.5 h-9 w-9">
        <object>
            <a href="{{route('profile.show', ['id' => $post->user->id])}}">
                <p class="inline-block text-black text-base mr-2.5 relative z-50 hover:underline">{{$post->user->name}}</p>
            </a>
        </object>
        <p class="inline-block text-gray-800 text-base">{{$post->created_at}}</p>
    </div>
    <p class="text-2xl text-black">
        {{$comment->text}}
    </p>
    {{-- <div class="flex">
        <div class="py-1 px-4 bg-green-200 rounded-full flex mr-3.5">
            <img src="\img\upvote.svg" alt="upvote" class="mr-2">
            <p>{{$comment->likes}}</p>
        </div>
        <div class="py-1 px-4 bg-red-200 rounded-full flex mr-3.5">
            <img src="\img\downvote.svg" alt="upvote" class="mr-2">
            <p>{{$comment->dislikes}}</p>
        </div>
    </div> --}}
</div>

@endforeach   
