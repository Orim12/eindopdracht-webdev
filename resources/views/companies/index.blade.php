@extends('layouts.app')

@section('content')
<main class="w-full max-w-4xl mx-auto space-y-10 px-4 pb-16">
    <h1 class="text-3xl font-bold mb-6">Companies</h1>
    <div class="space-y-6">
        @foreach($companies as $company)
            <x-panel>
                <div class="flex items-center gap-6">
                    <div class="w-16 h-16 bg-muted rounded-lg flex items-center justify-center overflow-hidden">
                        <img src="https://picsum.photos/seed/{{ $company->id }}/64/64" alt="{{ $company->name }} Logo" class="object-cover w-full h-full">
                    </div>
                    <div>
                        <div class="font-bold text-lg text-pixel">{{ $company->name }}</div>
                        <div class="text-sm text-dark">{{ $company->jobs_count }} jobs</div>
                    </div>
                </div>
            </x-panel>
        @endforeach
    </div>
</main>
@endsection
