<!-- Footer -->
<footer class="bg-white dark:bg-neutral-800 sticky top-[100vh]">
    <div class="container mx-auto px-4 py-4">
        <div class="flex flex-col items-center">
            <div class="flex-1">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="ml-4">
                            <p class="mt-1 text-sm leading-5 text-neutral-500 dark:text-neutral-400">
                                {{ config('app.name', 'Breclarc') }} {{ __('navigation.powered_by') }} <a href="https://github.com/patitolabs/breclarc" class="text-neutral-700 hover:text-neutral-600 dark:text-neutral-300" target="_blank">Breclarc</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
