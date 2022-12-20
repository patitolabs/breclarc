<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-neutral-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-neutral-600 dark:text-neutral-400">
            {{ __('auth.secure_confirm_password') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-label for="password" :value="__('auth.password_label')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <div class="flex justify-end mt-4">
                <x-button>
                    {{ __('auth.confirm') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
