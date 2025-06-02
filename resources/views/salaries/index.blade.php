@extends('layouts.app')

@section('content')
<main class="w-full max-w-4xl mx-auto space-y-10 px-4 pb-16">
    <h1 class="text-3xl font-bold mb-6">Top Salaries</h1>
    <div class="space-y-6">
        @foreach($jobs as $job)
            <x-panel>
                <x-job-card-wide :employer="$job->employer->name" :title="$job->title" :salary="'€' . number_format($job->salary, 0, ',', '.')" :tags="$job->tags->pluck('name')->toArray()" :logo-seed="$job->employer->id" />
            </x-panel>
        @endforeach
    </div>
</main>
@endsection
