<div>
    <div>
        <h1 class="text-3xl text-black pb-6">{{$comments->count()}} comments</h1>
    </div>

    
    
    <div>
        <textarea wire:model="inputComment" rows="4" type="text" id="text" name="text" value="" class="w-full border-1 border-gray-300 rounded-3xl mb-2"></textarea>
        {{-- <input type="hidden" value="" name="user_id" /> --}}
        <button wire:click="submitComment" class="bg-green-400 text-base rounded-full text-black text-base inline-block py-2 px-5 mb-12">Submit</button>
    </div>

    @if(session('message'))
        <div class="text-black bg-green-300 top-0 text-center w-full rounded-full py-2 mb-12">
            {{session('message')}}
        </div>     
    @endif

    @foreach($comments as $comment)

    <div class="border border-1 border-gray-300 rounded-3xl p-6 mb-8 max-w-3xl flex flex-col">
        <div class="flex items-center mb-4">
            <img src="\img\profile-pic.png" alt="profile picture" class="mr-2.5">
            <object>
                <a href="{{route('profile.show', ['id' => $post->user->id])}}">
                    <p class="inline-block text-black text-base mr-2.5 relative z-50 hover:underline">{{$comment->user->name}}</p>
                </a>
            </object>
            <p class="inline-block text-gray-800 text-base">{{$comment->created_at}}</p>
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

</div>
