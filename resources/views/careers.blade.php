@extends('layouts.app')
@section('content')
    <h1 class="text-2xl font-bold mb-4">Careers</h1>
    <div class="space-y-4">
        @foreach($positions as $position)
            <x-panel>
                <x-job-card-wide :employer="$position->employer->name" :title="$position->title" :salary="'€' . number_format($position->salary, 0, ',', '.')" :tags="$position->tags->pluck('name')->toArray()" :logo-seed="$position->employer->logo ?? 'default'" />
            </x-panel>
        @endforeach
    </div>
@endsection
