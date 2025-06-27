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
    </head>
    <body class="bg-muted text-pixel font-sans min-h-screen flex flex-col">
        <header class="w-full max-w-5xl mx-auto flex items-center justify-between py-6 px-4">
            <div class="flex items-center gap-3">
                <a href="/" class="text-2xl font-bold text-pixel tracking-tight">Pixel Positions</a>
            </div>
            <nav class="flex gap-6 text-base font-medium">
                <a href="{{ route('jobs') }}" class="hover:text-accent transition-colors">Jobs</a>
                <a href="{{ route('careers') }}" class="hover:text-accent transition-colors">Careers</a>
                <a href="{{ route('salaries') }}" class="hover:text-accent transition-colors">Salaries</a>
                <a href="{{ route('companies') }}" class="hover:text-accent transition-colors">Companies</a>
                <a href="#" class="ml-4 px-4 py-2 rounded-lg bg-accent text-pixel font-semibold shadow-card hover:bg-pixel hover:text-accent transition-colors">Post a Job</a>
            </nav>
        </header>
        <main class="w-full max-w-4xl mx-auto space-y-10 px-4 pb-16">
            @yield('content')
        </main>
    </body>
</html>
