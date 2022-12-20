<x-guest-layout>
    <div class="h-screen">
        <div class="bg-white dark:bg-neutral-900 border-neutral-100 dark:border-neutral-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="shrink-0 flex items-center">
                            <a href="{{ route('videos.index') }}">
                                <x-application-logo
                                    class="block h-10 w-auto fill-current text-neutral-600 dark:text-neutral-400" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main class="flex items-center justify-center">
            <div class="flex flex-col items-start space-y-3 my-48 px-4 sm:flex-row sm:space-y-0 sm:items-center sm:space-x-3">
                <p class="font-semibold text-9xl text-neutral-800 dark:text-neutral-200 lg:mx-4">404</p>
                <div class="space-y-2 lg:pr-4">
                    {{ $slot }}
                </div>
                <x-button onclick="window.location.href='/'">
                    {{ __('errors.go_home') }}
                </x-button>
            </div>
        </main>
    </div>
</x-guest-layout>
