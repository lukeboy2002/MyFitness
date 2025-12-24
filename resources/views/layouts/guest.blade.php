@props(['title' => ''])

        <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }} - {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.bunny.net/css?family=anton-sc:400" rel="stylesheet"/>

    <!-- Scripts -->
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    <style>
        html {
            background-color: hsl(220 14.3% 95.9%); /* gray-100 */
        }

        html.dark {
            background-color: hsl(220.9 39.3% 11%); /* gray-900 */
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @stack('styles')
</head>
<body class="bg-body min-h-screen flex flex-col font-sans antialiased">
<header class="w-full lg:max-w-7xl mx-auto text-sm pt-20">
    <img src="{{ asset('assets/logo.png') }}" alt="logo" class="h-60 w-auto mx-auto">
</header>
<main class="flex grow items-center w-full lg:max-w-7xl mx-auto px-8 lg:px-0">
    <div class="w-full max-w-md mx-auto">
        {{ $slot }}
    </div>
</main>
<footer>
    <div class="border-t border-accent/60">
        <div class="text-center flex flex-col gap-2 pt-6 pb-4 text-default">
            <p>© Copyright <span class="font-bold text-accent">MyFitness</span> All rights reserved.</p>
            <p>Designed by Antoine Hendriks</p>
        </div>
    </div>
</footer>
@stack('scripts')
</body>
</html>
