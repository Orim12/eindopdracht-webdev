<div class="flex flex-col items-center bg-white rounded-xl shadow-card p-8 transition-colors duration-300 hover:bg-muted">
    <div class="flex-shrink-0 w-[90px] h-[90px] bg-muted rounded-lg flex items-center justify-center overflow-hidden mb-4">
        <img src="https://picsum.photos/seed/{{ $logoSeed ?? 'default' }}/90/90" alt="{{ $employer ?? 'Employer' }} Logo" class="object-cover w-full h-full">
    </div>
    <div class="font-bold text-xl text-pixel">{{ $employer ?? 'Employer' }}</div>
    <div class="text-2xl font-semibold mt-1">{{ $title ?? 'Job Title' }}</div>
    <div class="text-base text-dark mt-1 mb-2">{{ $salary ?? '€0' }}</div>
    <div class="flex flex-row flex-wrap gap-2 justify-center">
        @foreach(($tags ?? ['Tag']) as $tag)
            <x-tag :label="$tag" />
        @endforeach
    </div>
</div>
