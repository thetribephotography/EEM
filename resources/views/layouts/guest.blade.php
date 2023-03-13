<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'EEM') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-4 sm:pt-0" style="background-color: rgb(35, 35, 74)">
            <div>
                <a href="#">
                    {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                    <p class="text-xl font-semibold text-gray-600/100 dark:text-gray-500/100">EXPENSE SYSTEM</p>
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-8 shadow-md overflow-hidden sm:rounded-lg text-white-500" style="background-color:rgb(135, 135, 135)">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
