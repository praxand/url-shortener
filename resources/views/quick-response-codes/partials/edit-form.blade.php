<div class="grid grid-cols-1 sm:grid-cols-4 sm:gap-4">
    <div class="col-span-3 overflow-hidden shadow ring-1 ring-black ring-opacity-5 rounded-lg border border-gray-200 dark:border-gray-700">
        <div class="flex items-center bg-white dark:bg-gray-800">
            <div class="w-full">
                <form
                    action="{{ route('quick-response-codes.update', $code) }}"
                    method="post"
                >
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 space-y-4 p-4">
                        <div>
                            <x-input-label for="title">
                                Title <span class="text-red-500">*</span>
                            </x-input-label>

                            <div class="mt-2">
                                <x-text-input
                                    type="text"
                                    name="title"
                                    id="title"
                                    class="w-full"
                                    :value="old('title', $code->title)"
                                />
                            </div>

                            <x-input-error
                                :messages="$errors->get('title')"
                                class="mt-2"
                            />
                        </div>

                        <div>
                            <x-input-label for="original_link">
                                Original Link <span class="text-red-500">*</span>
                            </x-input-label>

                            <div class="mt-2">
                                <x-text-input
                                    type="text"
                                    name="original_link"
                                    id="original_link"
                                    class="w-full"
                                    :value="old('original_link', $code->original_link)"
                                />
                            </div>

                            <x-input-error
                                :messages="$errors->get('original_link')"
                                class="mt-2"
                            />
                        </div>

                        <div>
                            <x-input-label for="expires_at">
                                Expiration Date
                            </x-input-label>
    
                            <div class="mt-2">
                                <x-text-input
                                    type="datetime-local"
                                    name="expires_at"
                                    id="expires_at"
                                    class="w-full dark:[color-scheme:dark]"
                                    :value="old('expires_at', $code->expires_at ? $code->expires_at->format('Y-m-d\TH:i') : null)"
                                />
                            </div>
    
                            <x-input-error
                                :messages="$errors->get('expires_at')"
                                class="mt-2"
                            />
                        </div>

                        <div class="space-y-2 sm:space-y-0 sm:flex sm:space-x-2">
                            <x-primary-button class="w-full sm:w-auto justify-center">
                                Submit
                            </x-primary-button>

                            <div>
                                <a href="{{ route('quick-response-codes.index') }}">
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

    <div class="mt-4 sm:mt-0 col-span-1 ">
        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 rounded-lg border border-gray-200 dark:border-gray-700">
            <div class="flex items-center bg-white dark:bg-gray-800">
                <div class="w-full">
                    <div class="p-4 text-gray-900 dark:text-gray-200">
                        <p>Created at</p>
        
                        {{ $code->created_at->diffForHumans() }}
                    </div>
        
                    <div class="p-4 text-gray-900 dark:text-gray-200">
                        <p>Last modified at</p>
        
                        {{ $code->updated_at->diffForHumans() }}
                    </div>

                    @if ($code->expires_at)
                        <div class="p-4 text-gray-900 dark:text-gray-200">
                            <p>Expires at</p>
            
                            {{ $code->expires_at->diffForHumans() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
