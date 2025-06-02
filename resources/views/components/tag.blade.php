@props(['label', 'size' => 'base'])

@php
    $classes = $size === 'small'
        ? 'px-2 py-0.5 text-xs bg-brand/10 text-brand rounded-full'
        : 'px-3 py-1 text-sm bg-brand/10 text-brand rounded-full';
@endphp

<span class="{{ $classes }}">
    {{ $label }}
</span>
