<a href="{{ route('weeks.show', $week) }}">
    <div
        class="rounded-lg shadow-lg hover:shadow-xl overflow-hidden mb-4 transition duration-200 ease-in-out transform hover:scale-105">
        <div class="flex-1 bg-neutral-50 dark:bg-neutral-800 p-6">
            <div class="flex items-center justify-between">
                <div class="flex-1">
                    <div class="text-lg leading-tight font-semibold text-neutral-900 dark:text-white">
                        {{ __('videos.week') . ' ' . $week }}
                    </div>
                </div>
                <div class="flex-shrink-1">
                    <p class="mt-2 text-sm leading-tight text-neutral-500">
                        <svg class="w-5 h-5 text-neutral-500 dark:text-neutral-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </p>
                </div>
            </div>
        </div>
    </div>
</a>
