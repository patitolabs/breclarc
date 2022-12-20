<x-app-layout>
    @section('title', '- ' . __('videos.edit_video'))

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

                                <form action="{{ route('videos.update', $video->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="flex flex-wrap -mx-3">
                                        <div class="w-full px-3">
                                            <label for="subject_id"
                                                class="block text-neutral-700 dark:text-neutral-300 text-sm font-bold mb-2">
                                                {{ __('videos.subject') }}
                                            </label>

                                            <select id="subject_id"
                                                class="rounded-md shadow-sm w-full text-neutral-900 dark:text-neutral-100 bg-neutral-100 dark:bg-neutral-700 border-neutral-300 dark:border-neutral-700 focus:border-neutral-400 dark:focus:border-neutral-600 focus:ring focus:ring-neutral-200 dark:focus:ring-neutral-700 focus:ring-opacity-50 @error('subject_id') border-red-500 @enderror"
                                                name="subject_id" required autocomplete="subject_id">

                                                <option value="0" selected disabled>{{ __('videos.select_subject') }}
                                                </option>
                                                @foreach ($subjects as $subject)
                                                    <option value="{{ $subject->id }}"
                                                        {{ $video->subject_id == $subject->id ? 'selected' : '' }}>
                                                        {{ $subject->name }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            @error('subject_id')
                                                <p class="text-red-500 text-xs italic mt-4">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>


                                        <div class="w-full px-3 mt-4">
                                            <label for="week"
                                                class="block text-neutral-700 dark:text-neutral-300 text-sm font-bold mb-2">
                                                {{ __('videos.week') }}
                                            </label>
                                            <x-input id="week" name="week" type="number" :value="$video->week"
                                                class="w-full" min="1" max="52"/>

                                            @error('week')
                                                <p class="text-red-500 text-xs italic mt-4">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>


                                        <div class="w-full px-3 mt-4">
                                            <label for="resource_url"
                                                class="block text-neutral-700 dark:text-neutral-300 text-sm font-bold mb-2">
                                                {{ __('videos.resource_url') }}
                                            </label>
                                            <x-input id="resource_url" name="resource_url" type="text" :value="$video->resource_url"
                                                class="w-full" placeholder="{{ __('videos.resource_url_placeholder') }}"
                                                maxlength="255" />
                                            @error('resource_url')
                                                <p class="text-red-500 text-xs italic mt-4">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>


                                        <div class="w-full px-3 mt-4">
                                            <label for="part"
                                                class="block text-neutral-700 dark:text-neutral-300 text-sm font-bold mb-2">
                                                {{ __('videos.part') }}
                                            </label>
                                            <x-input id="part" name="part" type="number" :value="$video->part"
                                                class="w-full" min="1" max="10" />
                                            @error('part')
                                                <p class="text-red-500 text-xs italic mt-4">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>


                                        <div class="w-full px-3 mt-4">
                                            <label for="session_parts"
                                                class="block text-neutral-700 dark:text-neutral-300 text-sm font-bold mb-2">
                                                {{ __('videos.session_parts') }}
                                            </label>
                                            <x-input id="session_parts" name="session_parts" type="number"
                                                :value="$video->session_parts == 0 ? 1 : $video->session_parts" class="w-full" min="1" max="10" />
                                            @error('session_parts')
                                                <p class="text-red-500 text-xs italic mt-4">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>


                                        <div class="w-full px-3 mt-4">
                                            <label for="description"
                                                class="block text-neutral-700 dark:text-neutral-300 text-sm font-bold mb-2">
                                                {{ __('videos.description') }}
                                            </label>
                                            <textarea id="description"
                                                class="rounded-md shadow-sm w-full text-neutral-900 dark:text-neutral-100 bg-neutral-100 dark:bg-neutral-700 border-neutral-300 dark:border-neutral-700 focus:border-neutral-400 dark:focus:border-neutral-600 focus:ring focus:ring-neutral-200 dark:focus:ring-neutral-700 focus:ring-opacity-50 @error('description') border-red-500 @enderror"
                                                name="description" rows="3" placeholder="{{ __('videos.description_placeholder') }}" required
                                                autocomplete="description">{{ $video->description }}</textarea>
                                            @error('description')
                                                <p class="text-red-500 text-xs italic mt-4">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>


                                        <div class="px-3 mt-4 w-full">
                                            <x-button type="submit">
                                                {{ __('videos.edit_video') }}
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
