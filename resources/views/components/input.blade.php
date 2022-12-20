@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm text-neutral-900 dark:text-neutral-100 bg-neutral-100 dark:bg-neutral-700 border-neutral-300 dark:border-neutral-700 focus:border-neutral-400 dark:focus:border-neutral-600 focus:ring focus:ring-neutral-200 dark:focus:ring-neutral-700 focus:ring-opacity-50']) !!}>
