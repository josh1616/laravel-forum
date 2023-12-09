
@if(session()->has('message'))
    <div class="text-black bg-green-300 top-0 text-center w-full rounded-full py-2 mb-12 ">
        {{session('message')}}
    </div>
@endif


@if(session()->has('messageDelete'))
    <div class="text-black bg-red-300 top-0 text-center w-full rounded-full py-2 mb-12 ">
        {{session('messageDelete')}}
    </div>
@endif
