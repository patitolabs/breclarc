@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-neutral-400 dark:border-neutral-600 text-base font-medium text-neutral-700 dark:text-neutral-300 bg-neutral-50 dark:bg-neutral-900 focus:outline-none focus:text-neutral-800 dark:focus:text-neutral-200 focus:bg-neutral-100 dark:focus:bg-neutral-900 focus:border-neutral-700 dark:focus:border-neutral-300 transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-neutral-600 hover:text-neutral-800 hover:bg-neutral-50 hover:border-neutral-300 focus:outline-none focus:text-neutral-800 focus:bg-neutral-50 focus:border-neutral-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
