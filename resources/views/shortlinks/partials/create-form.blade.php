<div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 rounded-lg border border-gray-200 dark:border-gray-700">
    <div class="flex items-center bg-white dark:bg-gray-800">
        <div class="w-full">
            <form action="{{ route('shortlinks.store') }}" method="post">
                @csrf

                <div class="grid grid-cols-1 space-y-4 p-4">
                    <div>
                        <x-input-label for="title">Title</x-input-label>

                        <div class="mt-2">
                            <x-text-input
                                type="text"
                                name="title"
                                id="title"
                                class="w-full"
                                :value="old('title')"
                            />
                        </div>

                        <x-input-error
                            class="mt-2"
                            :messages="$errors->get('title')"
                        />
                    </div>

                    <div>
                        <x-input-label for="original_link">
                            Original Link
                        </x-input-label>

                        <div class="mt-2">
                            <x-text-input
                                type="text"
                                name="original_link"
                                id="original_link"
                                class="w-full"
                                :value="old('original_link')"
                            />
                        </div>

                        <x-input-error
                            class="mt-2"
                            :messages="$errors->get('original_link')"
                        />
                    </div>

                    <div class="space-y-2 sm:space-y-0 sm:flex sm:space-x-2">
                        <x-primary-button
                            class="w-full sm:w-auto justify-center"
                            name="action"
                            value="create"
                        >
                            Create
                        </x-primary-button>

                        <x-secondary-button
                            type="submit"
                            class="w-full sm:w-auto justify-center"
                            name="action"
                            value="create_another"
                        >
                            Create & create another
                        </x-secondary-button>

                        <div>
                            <a href="{{ route('shortlinks.index') }}">
                                <x-secondary-button class="w-full sm:w-auto justify-center">
                                    Cancel
                                </x-secondary-button>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
