@foreach ($comments as $comment)

<div class="border border-1 border-gray-300 rounded-3xl p-6 mb-8 max-w-3xl flex flex-col">
    <div class="flex items-center mb-4">
        <img src="\img\profile-pic.png" alt="profile picture" class="mr-2.5">
        <p class="inline-block text-black text-base mr-2.5">{{$comment->user->name}}</p>
        <p class="inline-block text-gray-800 text-base">{{$post->created_at}}</p>
    </div>
    <p class="text-2xl text-black">
        {{$comment->text}}
    </p>
</div>

@endforeach   
