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
                    <x-panel>
                        <x-job-card-wide :employer="'Acme Corp'" :title="'Senior Laravel Developer'" :salary="'€5.000'" :tags="['Laravel', 'Remote', 'Full-time']" :logo-seed="'acme'" />
                    </x-panel>
                    <x-panel>
                        <x-job-card-wide :employer="'Globex Inc.'" :title="'Frontend Engineer'" :salary="'€4.200'" :tags="['Vue', 'JavaScript', 'Remote']" :logo-seed="'globex'" />
                    </x-panel>
                </div>
            </section>
            <section>
                <h2 class="text-2xl font-bold mb-4">Tags</h2>
                <div class="flex flex-wrap gap-2">
                    <x-tag label="Laravel" />
                    <x-tag label="Vue" />
                    <x-tag label="Remote" />
                    <x-tag label="Full-time" />
                    <x-tag label="JavaScript" />
                </div>
            </section>
            <section>
                <h2 class="text-2xl font-bold mb-4">Recent Jobs</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <x-panel>
                        <x-job-card :employer="'Stark Industries'" :title="'Junior Backend Developer'" :salary="'€3.000'" :tags="['PHP', 'Full-time']" :logo-seed="'stark'" />
                    </x-panel>
                    <x-panel>
                        <x-job-card :employer="'Wayne Enterprises'" :title="'UI/UX Designer'" :salary="'€3.500'" :tags="['Design', 'Remote']" :logo-seed="'wayne'" />
                    </x-panel>
                </div>
            </section>
        </main>
    </body>
</html>
