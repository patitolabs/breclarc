<x-app-layout>
    @section('title', '- ' . __('users.create_user'))

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 lg:px-8">

            @isset($header)
                <div class="flex-1 mb-6">
                    <div class="text-2xl leading-tight font-medium text-neutral-900 dark:text-white">
                        {{ $header }}
                    </div>
                </div>
            @endisset

            <div class="rounded-lg shadow-lg hover:shadow-xl overflow-hidden mb-4 transition duration-200 ease-in-out">
                <div class="flex-1 bg-neutral-50 dark:bg-neutral-800 p-6">
                    <div class="flex items-center justify-between">
                        <div class="flex-1">

                            <form action="{{ route('users.store') }}" method="POST">
                                @csrf
                                <div class="flex flex-wrap -mx-3">

                                    <div class="w-full px-3">
                                        <x-form-input-text label="{{ __('users.name') }}" type="text"
                                            attribute="name" value="{{ old('name') }}"
                                            placeholder="{{ __('users.name_placeholder') }}">
                                        </x-form-input-text>
                                        @error('name')
                                            <p class="text-red-500 text-xs italic mt-4">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <div class="w-full px-3 mt-4">
                                        <x-form-input-text label="{{ __('users.email') }}" attribute="email"
                                            type="email" value="{{ old('email') }}"
                                            placeholder="{{ __('users.email_placeholder') }}">
                                        </x-form-input-text>
                                        @error('email')
                                            <p class="text-red-500 text-xs italic mt-4">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <div class="w-full px-3 mt-4">
                                        <x-form-input-text label="{{ __('users.password') }}" type="password"
                                            attribute="password" value="{{ old('password') }}"
                                            placeholder="{{ __('users.password_placeholder') }}">
                                        </x-form-input-text>
                                        @error('password')
                                            <p class="text-red-500 text-xs italic mt-4">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <div class="w-full px-3 mt-4">
                                        <x-form-input-text label="{{ __('users.confirm_password') }}" type="password"
                                            attribute="password_confirmation"
                                            value="{{ old('password_confirmation') }}"
                                            placeholder="{{ __('users.password_confirmation_placeholder') }}">
                                        </x-form-input-text>
                                        @error('password_confirmation')
                                            <p class="text-red-500 text-xs italic mt-4">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <div class="w-full px-3 mt-4">
                                        <x-form-input-text label="{{ __('users.avatar') }}" attribute="avatar"
                                            type="text" value="{{ old('avatar') }}"
                                            placeholder="{{ __('users.avatar_placeholder') }}">
                                        </x-form-input-text>
                                        @error('avatar')
                                            <p class="text-red-500 text-xs italic mt-4">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <div class="px-3 mt-6 w-full">
                                        <label for="is_admin" class="inline-flex items-center">
                                            <input id="is_admin" type="checkbox" value="1"
                                                class="rounded border-neutral-300 dark:border-neutral-700 text-blue-600 shadow-sm focus:border-neutral-300 dark:focus:border-neutral-700 focus:ring focus:ring-neutral-200 dark:focus:ring-neutral-800 focus:ring-opacity-50"
                                                name="is_admin">
                                            <span
                                                class="ml-2 text-sm text-neutral-600 dark:text-neutral-300">{{ __('users.is_admin') }}</span>
                                        </label>
                                        @error('is_admin')
                                            <p class="text-red-500 text-xs italic mt-4">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <div class="px-3 mt-6">
                                        <x-button type="submit" class="w-full">
                                            {{ __('users.create_user') }}
                                        </x-button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</x-app-layout>
