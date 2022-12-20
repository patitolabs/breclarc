<x-app-layout>
    @section('title', '- ' . __('navigation.weeks'))

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 lg:px-8">

            @for ($i = 1; $i <= $lastWeek; $i++)
                <x-week-card :week="$i" />
            @endfor

        </div>
    </div>

</x-app-layout>
