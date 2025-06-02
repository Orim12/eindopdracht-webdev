@extends('layouts.app')

@section('content')
<main class="w-full max-w-2xl mx-auto space-y-10 px-4 pb-16">
    <x-panel>
        <x-job-card-wide :employer="$job->employer->name" :title="$job->title" :salary="'€' . number_format($job->salary, 0, ',', '.')" :tags="$job->tags->pluck('name')->toArray()" :logo-seed="$job->employer->id" />
    </x-panel>
</main>
@endsection
