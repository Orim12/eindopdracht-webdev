<div class="flex flex-row items-center gap-6 bg-brand/5 rounded-lg p-6 transition-colors duration-300 hover:bg-brand/10">
    <div class="flex-shrink-0 w-[90px] h-[90px] bg-white rounded-lg flex items-center justify-center overflow-hidden">
        <img src="https://picsum.photos/seed/{{ $logoSeed ?? 'default' }}/90/90" alt="{{ $employer ?? 'Employer' }} Logo" class="object-cover w-full h-full">
    </div>
    <div class="flex-1 min-w-0">
        <div class="font-bold text-lg text-brand">{{ $employer ?? 'Employer' }}</div>
        <div class="text-xl font-semibold mt-1">{{ $title ?? 'Job Title' }}</div>
        <div class="text-sm text-gray-500 mt-1">{{ $salary ?? '€0' }}</div>
    </div>
    <div class="flex flex-row flex-wrap gap-2 justify-end">
        @foreach(($tags ?? ['Tag']) as $tag)
            <x-tag :label="$tag" />
        @endforeach
    </div>
</div>
