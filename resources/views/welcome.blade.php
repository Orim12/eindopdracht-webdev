<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Fallback CSS for when Vite assets are unavailable -->
        <style>
            body {
                background: #f8fafc;
                color: #22223b;
                font-family: 'Hanken Grotesk', 'Instrument Sans', Arial, sans-serif;
                min-height: 100vh;
                margin: 0;
                display: flex;
                flex-direction: column;
            }
            header {
                width: 100%;
                max-width: 80rem;
                margin: 0 auto;
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 1.5rem 1rem;
            }
            nav {
                display: flex;
                gap: 1.5rem;
                font-size: 1rem;
                font-weight: 500;
            }
            nav a {
                color: #22223b;
                text-decoration: none;
                transition: color 0.2s;
            }
            nav a:hover {
                color: #e0aaff;
            }
            nav a:last-child {
                margin-left: 1rem;
                padding: 0.5rem 1rem;
                border-radius: 0.5rem;
                background: #e0aaff;
                color: #22223b;
                font-weight: 600;
                box-shadow: 0 2px 8px 0 rgba(34,34,59,0.08);
                transition: background 0.2s, color 0.2s;
            }
            nav a:last-child:hover {
                background: #22223b;
                color: #e0aaff;
            }
            main {
                width: 100%;
                max-width: 64rem;
                margin: 0 auto;
                padding: 0 1rem 4rem 1rem;
                flex: 1 0 auto;
            }
            h2 {
                font-size: 1.25rem;
                font-weight: bold;
                margin-bottom: 1rem;
            }
            .panel {
                background: #fff;
                border-radius: 1rem;
                box-shadow: 0 2px 8px 0 rgba(34,34,59,0.08);
                padding: 1.5rem;
            }
            .job-card, .job-card-wide {
                display: flex;
                flex-direction: column;
                gap: 0.5rem;
            }
            .tag {
                display: inline-block;
                background: #e0aaff;
                color: #22223b;
                border-radius: 0.5rem;
                padding: 0.25rem 0.75rem;
                font-size: 0.95rem;
                font-weight: 500;
                margin-right: 0.25rem;
                margin-bottom: 0.25rem;
            }
            @media (min-width: 768px) {
                .grid-cols-2 {
                    display: grid;
                    grid-template-columns: repeat(2, minmax(0, 1fr));
                    gap: 1.5rem;
                }
            }
        </style>
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-muted text-pixel font-sans min-h-screen flex flex-col">
        <header class="w-full max-w-5xl mx-auto flex items-center justify-between py-6 px-4">
            <div class="flex items-center gap-3">
                <span class="text-2xl font-bold text-pixel tracking-tight">Pixel Positions</span>
            </div>
            <nav class="flex gap-6 text-base font-medium">
                <a href="#" class="hover:text-accent transition-colors">Jobs</a>
                <a href="#" class="hover:text-accent transition-colors">Careers</a>
                <a href="#" class="hover:text-accent transition-colors">Salaries</a>
                <a href="#" class="hover:text-accent transition-colors">Companies</a>
                <a href="#" class="ml-4 px-4 py-2 rounded-lg bg-accent text-pixel font-semibold shadow-card hover:bg-pixel hover:text-accent transition-colors">Post a Job</a>
            </nav>
        </header>
        <main class="w-full max-w-4xl mx-auto space-y-10 px-4 pb-16">
            <section>
                <h2 class="text-2xl font-bold mb-4">Featured Jobs</h2>
                <div class="space-y-6">
                    @foreach($featuredPositions as $position)
                        <x-panel>
                            <x-job-card-wide :employer="$position->employer->name" :title="$position->title" :salary="'€' . number_format($position->salary, 0, ',', '.')" :tags="$position->tags->pluck('name')->toArray()" :logo-seed="$position->employer->logo ?? 'default'" />
                        </x-panel>
                    @endforeach
                </div>
            </section>
            <section>
                <h2 class="text-2xl font-bold mb-4">Tags</h2>
                <div class="flex flex-wrap gap-2">
                    @foreach($tags as $tag)
                        <x-tag :label="$tag->name" />
                    @endforeach
                </div>
            </section>
            <section>
                <h2 class="text-2xl font-bold mb-4">Recent Jobs</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach($recentPositions as $position)
                        <x-panel>
                            <x-job-card :employer="$position->employer->name" :title="$position->title" :salary="'€' . number_format($position->salary, 0, ',', '.')" :tags="$position->tags->pluck('name')->toArray()" :logo-seed="$position->employer->logo ?? 'default'" />
                        </x-panel>
                    @endforeach
                </div>
            </section>
        </main>
    </body>
</html>
