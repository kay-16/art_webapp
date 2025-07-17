@props(['active'])

@php
$classes = ($active ?? false)
            ? 'font-neuton font-[300] text-white items-center text-xl'
            : 'font-neuton font-[300] text-white items-center text-xl inline-flex border-transparent hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
