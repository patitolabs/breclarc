@if (session('success'))
    <div class="flex items-center justify-center">
        <div
            class="flex-1 bg-green-200 text-green-700 dark:bg-slate-700 dark:text-green-200 px-4 py-3 rounded-lg shadow-lg mb-4">
            <p class="text-sm leading-tight">
                {{ session('success') }}
            </p>
        </div>
    </div>
@endif
