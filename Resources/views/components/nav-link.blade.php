@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 font-medium leading-5 text-sky-500 focus:outline-none transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 font-medium leading-5 text-gray-50 hover:text-sky-500 focus:outline-none focus:text-sky-500 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
