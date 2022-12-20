<x-app-layout>
    @section('title', '- ' . __('subjects.edit_subject'))

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

                                <form action="{{ route('subjects.update', $subject->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="flex flex-wrap -mx-3">
                                        <div class="w-full px-3">
                                            <label for="name"
                                                class="block text-neutral-700 dark:text-neutral-300 text-sm font-bold mb-2">
                                                {{ __('subjects.name') }}
                                            </label>
                                            <x-input id="name" name="name" type="text" :value="$subject->name"
                                                class="w-full" placeholder="{{ __('subjects.name_placeholder') }}"
                                                />
                                            @error('name')
                                                <p class="text-red-500 text-xs italic mt-4">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>

                                        <div class="w-full px-3 mt-4">
                                            <label for="professor"
                                                class="block text-neutral-700 dark:text-neutral-300 text-sm font-bold mb-2">
                                                {{ __('subjects.professor') }}
                                            </label>
                                            <x-input id="professor" name="professor" type="text" :value="$subject->professor"
                                                class="w-full" placeholder="{{ __('subjects.professor_placeholder') }}"
                                                />
                                            @error('professor')
                                                <p class="text-red-500 text-xs italic mt-4">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>

                                        <div class="px-3 mt-4 w-full">
                                            <x-button type="submit">
                                                {{ __('subjects.edit_subject') }}
                                            </x-button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </x-app-layout>
