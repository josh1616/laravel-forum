<div class="bg-green-100 min-w-80 w-80 px-3 fixed h-full flex flex-col justify-between py-12 -xl:w-16 -xl:min-w-16 -xl:px-2 -xl:mx-auto">
    <div class="flex-col">
        <a href="http://localhost/" class="px-3 flex items-center mb-12">
            <div class="bg-green-700 w-6 h-6 rounded-full mr-3 -xl:mr-0"></div>
            <p class="font-bold -xl:hidden">Josh's Forum</p>
        </a>
        <button class="flex items-center w-full ease-linear rounded-xl duration-150 p-3 hover:bg-green-200 -xl:p-2 -xl:justify-center">
            <img src="\img\notification-icon--18x20.svg" alt="notification icon" class="mr-3 -xl:mr-0"/>
            <p class="text-base text-black -xl:hidden">Notifications</p>
        </button>
        <a href="{{ route('logout') }}" class="flex items-center w-full ease-linear rounded-xl duration-150 p-3 hover:bg-green-200 -xl:p-2 -xl:justify-center">
            <img src="\img\settings-icon--18x14.svg" alt="notification icon" class="mr-3 -xl:mr-0"/>
            <p class="text-base text-black -xl:hidden">Logout</p>
        </a> 
    </div>
    <a href="{{route('profile.edit')}}" class="flex items-center w-full ease-linear rounded-xl duration-150 p-3 hover:bg-green-200 -xl:p-2 -xl:justify-center">
        <div class="bg-gray-300 w-12 h-12 rounded-full mr-3 -xl:mr-0 -xl:w-8 -xl:h-8"></div>
        <div>
            <p class="font-medium text-base text-gray-800 block">{{ Auth::user()->name }}</p>
            <p class="font-medium text-sm text-gray-500 block">{{ Auth::user()->email }}</p>
        </div>
        
    </a>
</div>