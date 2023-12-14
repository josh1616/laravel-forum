<div class="bg-green-100 min-w-80 w-80 px-3 fixed h-full flex flex-col justify-between py-12 -xl:w-16 -xl:min-w-16 -xl:px-2 -xl:mx-auto">
    <div class="flex-col">
        <a href="http://localhost/" class="px-3 flex items-center mb-12">
            <div class="bg-green-700 w-6 h-6 rounded-full mr-3 -xl:mr-0"></div>
            <p class="font-bold -xl:hidden">Josh's Forum</p>
        </a>
        @role('admin')
            <p class="text-xl text-black p-3 -xl:hidden">Admin</p>
        @endrole
        @auth
            <div>
                <!-- Responsive Settings Options -->
                <div class="pt-4 pb-1 border-t border-gray-200">
        
                    <div class="mt-3 space-y-1">
                        <x-responsive-nav-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>
        
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
        
                            <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                </div>
            </div>
        @endauth
    </div>
    @auth
        <a href="{{route('profile.edit')}}" class="flex items-center w-full ease-linear rounded-xl duration-150 p-3 hover:bg-green-200 -xl:p-2 -xl:justify-center">
            <div>
                <img src="\img\profile-pic.svg" alt="profile picture" class="mr-2.5 h-12 w-12">
            </div>
            
            <div>
                <p class="font-medium text-base text-gray-800 block">{{ Auth::user()->name }}</p>
                <p class="font-medium text-sm text-gray-500 block">{{ Auth::user()->email }}</p>
            </div>        
        </a>
    @endauth
    @guest
        <div>
                <a href="{{route('login')}}" class="bg-green-400 text-base rounded-full text-black text-center text-base block py-2 px-5 mb-4 hover:bg-green-500">
                    Login
                </a>
                <a href="register" class="bg-black text-base rounded-full text-white text-center text-base block py-2 px-5 hover:bg-gray-800">
                    Register
                </a>
        </div>
    @endguest
</div>