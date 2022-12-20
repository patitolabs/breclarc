<nav x-data="{ open: false }" class="bg-white dark:bg-neutral-900 border-neutral-100 dark:border-neutral-900">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('videos.index') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-neutral-600 dark:text-neutral-400" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('videos.index')" :active="request()->routeIs('videos.index')">
                        {{ __('navigation.videos') }}
                    </x-nav-link>
                    <x-nav-link :href="route('subjects.index')" :active="request()->routeIs('subjects.index')">
                        {{ __('navigation.subjects') }}
                    </x-nav-link>
                    <x-nav-link :href="route('weeks')" :active="request()->routeIs('weeks')">
                        {{ __('navigation.weeks') }}
                    </x-nav-link>
                    @can('viewAny', App\User::class)
                        <x-nav-link :href="route('users.index')" :active="request()->routeIs('users.index')">
                            {{ __('navigation.users') }}
                        </x-nav-link>
                    @endcan
                </div>
            </div>


            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-neutral-500 hover:text-neutral-700 dark:hover:text-neutral-300 hover:border-neutral-300 dark:hover:border-neutral-700 focus:outline-none focus:text-neutral-700 dark:focus:text-neutral-300 focus:border-neutral-300 dark:focus:border-neutral-700 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('navigation.logout') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-neutral-400 dark:text-neutral-600 hover:text-neutral-500 hover:bg-neutral-100 dark:hover:bg-neutral-900 focus:outline-none focus:bg-neutral-100 dark:focus:bg-neutral-900 focus:text-neutral-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('videos.index')" :active="request()->routeIs('videos.index')">
                {{ __('navigation.videos') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('subjects.index')" :active="request()->routeIs('subjects.index')">
                {{ __('navigation.subjects') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('weeks')" :active="request()->routeIs('weeks')">
                {{ __('navigation.weeks') }}
            </x-responsive-nav-link>
            @can('viewAny', App\User::class)
                <x-responsive-nav-link :href="route('users.index')" :active="request()->routeIs('users.index')">
                    {{ __('navigation.users') }}
                </x-responsive-nav-link>
            @endcan
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-neutral-200">
            <div class="px-4">
                <div class="font-medium text-base text-neutral-800 dark:text-neutral-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-neutral-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('navigation.logout') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
