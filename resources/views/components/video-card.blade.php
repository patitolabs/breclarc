<div
    class=" rounded-lg shadow-lg hover:shadow-xl overflow-hidden mb-4 transition duration-200 ease-in-out transform hover:scale-105">
    <div class="flex-1 bg-neutral-50 dark:bg-neutral-800 p-6">
        <div class="flex items-center justify-between">
            <div class="flex-1">
                <div class="text-lg leading-tight font-semibold text-neutral-900 dark:text-white">
                    @can('update', $video)
                        <a href="{{ $video->resource_url }}" target="_blank">
                            {{ $video->subject->name }}
                        </a>
                    @else
                        {{ $video->subject->name }}
                    @endcan
                </div>
                <div class="mt-2 text-sm uppercase leading-tight font-bold text-neutral-900 dark:text-white">
                    {{ __('videos.week') }} {{ $video->week }}
                </div>
                @if ($video->session_parts > 1)
                    <div class="mt-2 text-sm leading-tight font-medium text-neutral-900 dark:text-white">
                        {{ $video->part }} {{ __('pagination.of_label') }} {{ $video->session_parts }}
                    </div>
                @endif
                <p class="mt-2 text-sm leading-tight text-neutral-600 dark:text-neutral-400">
                    {{ $video->description }}
                </p>
                <p class="mt-2 text-sm leading-tight text-neutral-500">
                    {{ $video->created_at->diffForHumans() }}
                </p>
            </div>
            <div class="flex-shrink-1">
                <p class="mt-2 text-sm leading-tight text-neutral-500">
                    @can('update', $video)
                        <x-edit-button :route="route('videos.edit', $video->id)" />
                    @endcan
                    @can('delete', $video)
                        <x-delete-button :route="route('videos.destroy', $video->id)" :confirm="__('videos.confirm_delete')" />
                    @endcan
                    @cannot('update', $video)
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
