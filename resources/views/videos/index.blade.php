<x-app-layout>
    @section('title', '- ' . __('navigation.videos'))

    <div class="pt-8 max-w-7xl mx-auto px-4 lg:px-8">
        <div class="rounded-lg overflow-hidden mb-4">
            <div class="flex-1">
                <div class="flex items-center justify-between">
                    <div class="flex-1">
                        <div class="text-2xl leading-tight font-medium text-neutral-900 dark:text-white">
                            {{ $greeting . ', ' . strtok(Auth::user()->name, ' ') }}
                        </div>
                    </div>
                    <div class="flex-shrink-1">
                        <p class="mt-2 text-sm leading-tight text-neutral-500">
                            @can('create', \App\Video::class)
                                <x-green-button :route="route('videos.create')">
                                    {{ __('videos.create') }}
                                </x-green-button>
                            @endcan
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-2 lg:px-0">
        <x-searchbar>
            @slot('action')
                {{ route('videos.index') }}
            @endslot

            @slot('label')
                {{ __('search.label') }}
            @endslot

            @slot('placeholder')
                {{ __('search.video_placeholder') }}
            @endslot
        </x-searchbar>
    </div>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 lg:px-8">

            <x-success-alert />

            @can('update', \App\Video::class)
                @foreach ($videos as $video)
                    <x-video-card :video="$video" />
                @endforeach
            @else
                @foreach ($videos as $video)
                    <x-video-card-link :video="$video" />
                @endforeach
            @endcan

            @if ($videos->count() == 0)
                <div class="mt-6 text-neutral-900 dark:text-white">
                    {{ __('videos.no_videos') }}
                </div>
            @endif

            <div class="mt-6 text-neutral-900 dark:text-white">
                {{ $videos->links() }}
            </div>
        </div>
    </div>

</x-app-layout>
