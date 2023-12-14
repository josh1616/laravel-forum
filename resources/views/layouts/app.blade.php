<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        @livewireStyles
    </head>
    <body>
        <div style="max-width: 1920px">
            <div class="flex">
                <div class="min-w-80 w-80 h-full xl:w-16 xl:min-w-16">
                    @auth
                        @include('layouts.navigation')
                    @endauth

                    @guest
                        @include('layouts.navigation')
                    @endguest
                </div>
                
                <main class="flex flex-col px-12 py-16 max-w-3xl mx-auto w-full xl:px-6 relative">
                    @include('components.flash')

                    @if ($errors->any())
                        <div>
                            @foreach ($errors->all() as $error)
                                <p class="mb-6 bg-red-300 text-white rounded-full py-2 px-4">{{$error}}</p>
                            @endforeach
                        </div>
                    @endif
                    @yield('content')
                    @yield('fixed')
                    {{-- {{ $slot }} --}}
                </main>
            </div>
        </div>
        @livewireScripts
    </body>
</html>



