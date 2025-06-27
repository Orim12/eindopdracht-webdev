@extends('layouts.app')
@section('content')
    <h1 class="text-2xl font-bold mb-4">Companies</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach($employers as $employer)
            <x-panel>
                <div class="flex items-center gap-4">
                    <img src="{{ $employer->logo ?? 'https://picsum.photos/seed/' . ($employer->id ?? 'default') . '/90/90' }}" alt="{{ $employer->name }} Logo" class="w-16 h-16 rounded-lg object-cover">
                    <div>
                        <div class="font-bold text-lg">{{ $employer->name }}</div>
                        <div class="text-sm text-gray-500">Contactpersoon: {{ $employer->user->name ?? '-' }}</div>
                    </div>
                </div>
            </x-panel>
        @endforeach
    </div>
@endsection
