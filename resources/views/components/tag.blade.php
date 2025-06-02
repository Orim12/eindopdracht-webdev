@props(['label', 'size' => 'base'])

@php
    $classes = $size === 'small'
        ? 'px-2 py-0.5 text-xs bg-accent/10 text-pixel rounded-full font-medium'
        : 'px-3 py-1 text-sm bg-accent/10 text-pixel rounded-full font-medium';
@endphp

<span class="{{ $classes }}">
    {{ $label }}
</span>
