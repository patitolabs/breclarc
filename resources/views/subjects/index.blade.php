<x-app-layout>
    @section('title', '- ' . __('navigation.subjects'))

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 lg:px-8">

            <x-success-alert />

            @can('create', \App\Subject::class)
            <div class="mb-3">
                <x-green-button :route="route('subjects.create')"> {{__('subjects.create')}} </x-green-button>
            </div>
            @endcan

            @can('update', \App\Subject::class)
                @foreach ($subjects as $subject)
                    <x-subject-card :subject="$subject" />
                @endforeach
            @else
                @foreach ($subjects as $subject)
                    <x-subject-card-link :subject="$subject" />
                @endforeach
            @endcan

            @if ($subjects->count() == 0)
                <div class="mt-6 text-neutral-900 dark:text-white">
                    {{ __('subjects.no_subjects') }}
                </div>
            @endif

            <div class="mt-6 text-neutral-900 dark:text-white">
                {{ $subjects->links() }}
            </div>
        </div>
    </div>

</x-app-layout>
