<x-app-layout>
    @section('title', '- ' . __('navigation.users'))

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 lg:px-8">

            <x-success-alert />

            @can('create', \App\User::class)
            <div class="mb-3">
                <x-green-button :route="route('users.create')"> {{__('users.create')}} </x-green-button>
            </div>
            @endcan

            @foreach ($users as $user)
                <x-user-card :user="$user" />
            @endforeach

            @if ($user->count() == 0)
                <div class="mt-6 text-neutral-900 dark:text-white">
                    {{ __('users.no_users') }}
                </div>
            @endif

            <div class="mt-6 text-neutral-900 dark:text-white">
                {{ $users->links() }}
            </div>
        </div>
    </div>

</x-app-layout>
