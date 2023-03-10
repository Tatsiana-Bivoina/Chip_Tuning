@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-sm font-sans uppercase text-white hover:text-white focus:outline-none focus:text-white transition duration-150 ease-in-out'
            : 'text-sm font-sans uppercase text-gray-400 hover:text-white focus:outline-none focus:text-white transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
