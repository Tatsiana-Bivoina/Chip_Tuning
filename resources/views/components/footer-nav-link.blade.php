@props(['active'])

@php
$classes = ($active ?? false)
            ? 'capitalize text-white text-base leading-6 underline hover:underline focus:outline-dotted focus:outline-white focus:outline-2 transition duration-150 ease-in-out'
            : 'capitalize text-white text-base leading-6 hover:underline focus:outline-dotted focus:outline-white focus:outline-2 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
