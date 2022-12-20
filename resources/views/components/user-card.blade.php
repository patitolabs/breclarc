    <div
        class=" rounded-lg shadow-lg hover:shadow-xl overflow-hidden mb-4 transition duration-200 ease-in-out transform hover:scale-105">
        <div class="flex-1 bg-neutral-50 dark:bg-neutral-800 p-6">
            <div class="flex items-center justify-between">
                <div class="flex-shrink-0">
                    <img class="w-20 h-20 rounded-full"
                        src="{{ $user->avatar ? $user->avatar : asset('img/user_placeholder.png') }}"
                        alt="{{ $user->name }}">
                </div>
                <div class="flex-1 ml-4">
                    <div class="text-lg leading-tight font-semibold text-neutral-900 dark:text-white">
                        {{ $user->name }}
                    </div>
                    <div class="mt-2 text-sm leading-tight font-bold text-neutral-900 dark:text-white">
                        {{ $user->email }}
                    </div>
                    <p class="mt-2 text-sm leading-tight text-neutral-700 dark:text-neutral-400">
                        @if ($user->is_admin)
                            <span class="font-bold @if($user->id == 1) text-yellow-600 @else text-green-700 @endif">@if($user->id == 1) {{ __('users.super_admin') }} @else{{ __('users.admin') }}@endif</span>
                        @else
                            <span class="">{{ __('users.user') }}</span>
                        @endif
                    </p>
                </div>
                <div class="flex-shrink-1">
                    <p class="mt-2 text-sm leading-tight text-neutral-500">
                        @can('update', $user)
                            <x-edit-button :route="route('users.edit', $user->id)" />
                        @endcan

                        @can('delete', $user)
                            <x-delete-button :route="route('users.destroy', $user->id)"
                                :confirm="__('users.confirm_delete')" />
                        @endcan
                    </p>
                </div>
            </div>
        </div>
    </div>
