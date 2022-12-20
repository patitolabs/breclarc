<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-neutral-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-neutral-600 dark:text-neutral-400">
            {{ __('auth.register_thanks') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ __('auth.new_verification_email_sent') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('auth.resend_verification_email_label') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-neutral-600 dark:text-neutral-400 hover:text-neutral-900 dark:hover:text-neutral-100">
                    {{ __('auth.logout_label') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
