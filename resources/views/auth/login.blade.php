<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-neutral-500" />
            </a>
        </x-slot>

        @if (config('app.password_login_enabled'))
            <form method="POST" action="{{ route('login') }}" class="mt-2">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-label for="email" :value="__('auth.email_label')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                        autofocus />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('auth.password_label')" />

                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-neutral-300 dark:border-neutral-700 text-neutral-600 dark:text-neutral-400 shadow-sm focus:border-neutral-300 dark:focus:border-neutral-700 focus:ring focus:ring-neutral-200 dark:focus:ring-neutral-800 focus:ring-opacity-50"
                            name="remember">
                        <span
                            class="ml-2 text-sm text-neutral-600 dark:text-neutral-300">{{ __('auth.remember_me_label') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-neutral-600 dark:text-neutral-400 hover:text-neutral-900 dark:hover:text-neutral-100"
                            href="{{ route('password.request') }}">
                            {{ __('auth.forgot_password_label') }}
                        </a>
                    @endif
                </div>

                <x-button class="w-full h-10 mb-2">
                    <span class="mx-auto">{{ __('auth.login_label') }}</span>
                </x-button>
            </form>
        @endif

        @if (config('app.google_oauth_enabled'))
            <!-- Login with Google button -->
            <x-button class="w-full mt-4 mb-4 h-10" type="button" onclick="window.location.href='auth/google/redirect'">
                <svg viewBox="0 0 24 24" width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                    <g transform="matrix(1, 0, 0, 1, 27.009001, -39.238998)">
                      <path fill="#4285F4" d="M -3.264 51.509 C -3.264 50.719 -3.334 49.969 -3.454 49.239 L -14.754 49.239 L -14.754 53.749 L -8.284 53.749 C -8.574 55.229 -9.424 56.479 -10.684 57.329 L -10.684 60.329 L -6.824 60.329 C -4.564 58.239 -3.264 55.159 -3.264 51.509 Z"/>
                      <path fill="#34A853" d="M -14.754 63.239 C -11.514 63.239 -8.804 62.159 -6.824 60.329 L -10.684 57.329 C -11.764 58.049 -13.134 58.489 -14.754 58.489 C -17.884 58.489 -20.534 56.379 -21.484 53.529 L -25.464 53.529 L -25.464 56.619 C -23.494 60.539 -19.444 63.239 -14.754 63.239 Z"/>
                      <path fill="#FBBC05" d="M -21.484 53.529 C -21.734 52.809 -21.864 52.039 -21.864 51.239 C -21.864 50.439 -21.724 49.669 -21.484 48.949 L -21.484 45.859 L -25.464 45.859 C -26.284 47.479 -26.754 49.299 -26.754 51.239 C -26.754 53.179 -26.284 54.999 -25.464 56.619 L -21.484 53.529 Z"/>
                      <path fill="#EA4335" d="M -14.754 43.989 C -12.984 43.989 -11.404 44.599 -10.154 45.789 L -6.734 42.369 C -8.804 40.429 -11.514 39.239 -14.754 39.239 C -19.444 39.239 -23.494 41.939 -25.464 45.859 L -21.484 48.949 C -20.534 46.099 -17.884 43.989 -14.754 43.989 Z"/>
                    </g>
                  </svg>
                <span class="mx-auto"> {{ __('auth.login_with_google_label') }}</span>
            </x-button>

            <x-rejection-text />
        @endif

        @if (!(config('app.password_login_enabled') || config('app.google_oauth_enabled')))
            <div class="flex items-center justify-center my-4">
                <div class="text-sm text-neutral-600 dark:text-neutral-400">
                    {{ __('auth.site_access_disabled') }}
                </div>
            </div>
        @endif

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </x-auth-card>
</x-guest-layout>
