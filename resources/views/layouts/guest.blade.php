<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Fira+Sans:wght@400;600;700&display=swap">

        <!-- Icon -->
        <link rel="icon" type="image/svg" href="{{ url('img/icon.svg') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-neutral-100 dark:bg-neutral-900">
        <div class="min h-screen font-sans antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
