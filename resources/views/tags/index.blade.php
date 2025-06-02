@extends('layouts.app')

@section('content')
<main class="w-full max-w-4xl mx-auto space-y-10 px-4 pb-16">
    <h1 class="text-3xl font-bold mb-6">Tags</h1>
    <div class="flex flex-wrap gap-2">
        @foreach($tags as $tag)
            <x-tag :label="$tag->name" />
        @endforeach
    </div>
</main>
@endsection
