<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-neutral-800 dark:bg-neutral-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-neutral-800 uppercase tracking-widest hover:bg-neutral-700 dark:hover:bg-neutral-300 active:bg-neutral-900 dark:active:bg-neutral-100 focus:outline-none focus:border-neutral-900 dark:focus:border-neutral-100 focus:ring ring-neutral-300 dark:ring-neutral-700 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
