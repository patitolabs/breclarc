<div
    class="rounded-lg shadow-lg hover:shadow-xl overflow-hidden mb-4 transition duration-200 ease-in-out transform hover:scale-105">
    <div class="flex-1 bg-neutral-50 dark:bg-neutral-800 p-6">
        <div class="flex items-center justify-between">
            <div class="flex-1">
                <div class="text-lg leading-tight font-semibold text-neutral-900 dark:text-white">
                    @can('update', $subject)
                        <a href="{{ route('subjects.show', $subject->id) }}">
                            {{ $subject->name }}
                        </a>
                    @else
                        {{ $subject->name }}
                    @endcan
                </div>
                <div class="mt-3 text-sm uppercase leading-tight font-bold text-neutral-900 dark:text-white">
                    <svg class="w-5 h-5 inline text-neutral-500 dark:text-neutral-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <p class="align-middle inline">{{ $subject->professor }}</p>
                </div>
            </div>
            <div class="flex-shrink-1">
                <p class="mt-2 text-sm leading-tight text-neutral-500">
                    @can('update', $subject)
                        <x-edit-button :route="route('subjects.edit', $subject->id)" />
                    @endcan
                    @can('delete', $subject)
                        <x-delete-button :route="route('subjects.destroy', $subject->id)" :confirm="__('subjects.confirm_delete')" />
                    @endcan
                    @cannot('update', $subject)
                        <svg class="w-5 h-5 text-neutral-500 dark:text-neutral-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    @endcannot
                </p>
            </div>
        </div>
    </div>
</div>
