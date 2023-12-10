{{-- <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

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
</nav> --}}



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
        <button class="flex items-center w-full ease-linear rounded-xl duration-150 p-3 hover:bg-green-200 -xl:p-2 -xl:justify-center">
            <img src="\img\notification-icon--18x20.svg" alt="notification icon" class="mr-3 -xl:mr-0"/>
            <p class="text-base text-black -xl:hidden">Notifications</p>
        </button>
        <a href="{{ route('logout') }}" class="flex items-center w-full ease-linear rounded-xl duration-150 p-3 hover:bg-green-200 -xl:p-2 -xl:justify-center">
            <img src="\img\settings-icon--18x14.svg" alt="notification icon" class="mr-3 -xl:mr-0"/>
            <p class="text-base text-black -xl:hidden">Logout</p>
        </a>
        @endauth
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
        <div class="bg-gray-300 w-12 h-12 rounded-full mr-3 -xl:mr-0 -xl:w-8 -xl:h-8"></div>
        <div>
            <p class="font-medium text-base text-gray-800 block">{{ Auth::user()->name }}</p>
            <p class="font-medium text-sm text-gray-500 block">{{ Auth::user()->email }}</p>
        </div>        
    </a>
    @endauth
    @guest
    <a href="{{route('login')}}" class="bg-green-400 text-base rounded-full text-black text-center text-base inline-block py-2 px-5">
        Login
    </a>
    @endguest
</div>