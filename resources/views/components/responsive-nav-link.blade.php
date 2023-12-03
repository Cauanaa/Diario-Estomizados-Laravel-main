@props(['active'])

@php
$classes = ($active ?? false)
            ? 'p-1'
            : 'p-1';
@endphp

<a style="display: inline-block;" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
