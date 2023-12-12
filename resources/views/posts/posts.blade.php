@foreach ($posts as $post)
{{-- replace manual link !bad --}}
    <a href="/posts/{{$post->id}}" class="border border-1 border-gray-300 rounded-3xl p-6 mb-8 max-w-3xl flex flex-col ease-linear duration-150 hover:border-black hover:cursor-pointer">
            <div class="flex items-center mb-4">
                <img src="\img\profile-pic.png" alt="profile picture" class="mr-2.5">
                <object>
                    <a href="{{route('profile.show', ['id' => $post->user->id])}}">
                        <p class="inline-block text-black text-base mr-2.5 relative z-50 hover:underline">{{$post->user->name}}</p>
                    </a>
                </object>
                <p class="inline-block text-gray-800 text-base">{{$post->created_at}}</p>
            </div>
            <p class="text-2xl text-black mb-4">
                {{$post->text}}
            </p>
            
            @if(!is_null($post->image)) 
                <div class="mb-4 max-h-96 overflow-y-hidden rounded-2xl w-full border border-gray-200">
                    <img src="{{ asset('storage/' . $post->image)}}" alt="picture related to post" class="rounded-2xl w-full">
                </div>
            @endif
            
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