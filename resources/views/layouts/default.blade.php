<!DOCTYPE html>
<html lang="en">
<head>
    @yield('header')
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div style="max-width: 1920px">
        <div class="flex">
            <div class="min-w-80 w-80 h-full xl:w-16 xl:min-w-16">
                <div class="bg-green-100 min-w-80 w-80 px-3 fixed h-full flex flex-col justify-between py-12 xl:w-16 xl:min-w-16 xl:px-2 xl:mx-auto">
                    <div class="flex-col">
                        <button class="px-3 flex items-center mb-12">
                            <div class="bg-green-700 w-6 h-6 rounded-full mr-3 xl:mr-0"></div>
                            <p class="font-bold xl:hidden">Josh's Forum</p>
                        </button>
                        <button class="flex items-center w-full ease-linear rounded-xl duration-150 p-3 hover:bg-green-200 xl:p-2 xl:justify-center">
                            <img src="\img\notification-icon--18x20.svg" alt="notification icon" class="mr-3 xl:mr-0"/>
                            <p class="text-base text-black xl:hidden">Notifications</p>
                        </button>
                        <button class="flex items-center w-full ease-linear rounded-xl duration-150 p-3 hover:bg-green-200 xl:p-2 xl:justify-center">
                            <img src="\img\settings-icon--18x14.svg" alt="notification icon" class="mr-3 xl:mr-0"/>
                            <p class="text-base text-black xl:hidden">Settings</p>
                        </button>
                    </div>
                    <button class="flex items-center w-full ease-linear rounded-xl duration-150 p-3 hover:bg-green-200 xl:p-2 xl:justify-center">
                        <div class="bg-gray-300 w-12 h-12 rounded-full mr-3 xl:mr-0 xl:w-8 xl:h-8"></div>
                        <p class="text-base text-black xl:hidden">Josh's Forum</p>
                    </button>
                </div>
            </div>
            
            <div class="flex flex-col px-12 py-16 max-w-3xl mx-auto xl:px-6 w-full">
                @if ($errors->any())
                    <div>
                        @foreach ($errors->all() as $error)
                            <p>{{$error}}</p>
                        @endforeach
                    </div>
                @endif
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>