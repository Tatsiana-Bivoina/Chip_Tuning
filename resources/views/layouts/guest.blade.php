<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Chip_Tuning') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <header class="h-[10vh] bg-[#222] flex justify-start items-center w-full pl-12">
            <div>
                <a href="{{ route('home.index') }}" class="text-gray-400">Logo</a>
            </div>
        </header>
        <div class="min-h-[80vh] flex flex-col justify-center items-center bg-gray-100">
            {{ $slot }}
        </div>
        <footer class="h-[10vh] bg-[#222] flex justify-center items-center w-full p-3">
            <div>
                <p class="text-gray-400">© 2023 Chip_Tuning.com | All rights reserved</p>
            </div>
        </footer>
    </body>
</html>
