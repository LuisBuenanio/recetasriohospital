<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Recetas Electrónicas Rio Hospital') }}</title>
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">


        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation')

            

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <!-- Footer Content -->
            <footer class="mt-4 px-3 py-2 text-sm font-medium flex justify-center bg-gray-800 shadow ">
                <div class=" text-white">
                    <p>  © 2023 MEGASYSTEMS - RIOBAMBA </p>               
                    <p class="text-center">ING JOSE LUIS BUENAÑO - 0992823863 </p>  
                </div>          
            </footer> 

        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
