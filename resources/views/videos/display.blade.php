<x-app-layout>
    @section('title', '- ' . __('navigation.videos'))

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 lg:px-8">

            @isset($header)
            <div class="flex-1 mb-6">
                <div class="text-2xl leading-tight font-medium text-neutral-900 dark:text-white">
                    {{ $header }}
                </div>
            </div>
            @endif

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

        </div>
    </div>

</x-app-layout>
