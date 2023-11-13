<div class="grid grid-cols-1 sm:grid-cols-4 sm:gap-4">
    <div class="col-span-3 overflow-hidden shadow ring-1 ring-black ring-opacity-5 rounded-lg border border-gray-200 dark:border-gray-700">
        <div class="flex items-center bg-white dark:bg-gray-800">
            <div class="w-full">
                <form action="{{ route('shortlinks.update', $shortlink) }}" method="post">
                    @csrf
                    @method('PUT')
    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 p-4">
                        <div class="sm:col-span-2">
                            <x-input-label for="title">
                                Title <span class="text-red-500">*</span>
                            </x-input-label>
    
                            <div class="mt-2">
                                <x-text-input
                                    type="text"
                                    name="title"
                                    id="title"
                                    class="w-full"
                                    :value="old('title', $shortlink->title)"
                                />
                            </div>
    
                            <x-input-error 
                                :messages="$errors->get('title')"
                                class="mt-2"
                            />
                        </div>
    
                        <div class="sm:col-span-2">
                            <x-input-label for="original_link">
                                Original Link <span class="text-red-500">*</span>
                            </x-input-label>
    
                            <div class="mt-2">
                                <x-text-input
                                    type="text"
                                    name="original_link"
                                    id="original_link"
                                    class="w-full"
                                    :value="old('original_link', $shortlink->original_link)"
                                />
                            </div>
    
                            <x-input-error
                                :messages="$errors->get('original_link')"
                                class="mt-2"
                            />
                        </div>
    
                        <div class="col-span-1">
                            <x-input-label for="password">
                                Password
                            </x-input-label>
                
                            <div class="mt-2">
                                <x-text-input
                                    type="password"
                                    name="password"
                                    id="password"
                                    class="block mt-1 w-full"
                                />
                            </div>
                
                            <x-input-error
                                :messages="$errors->get('password')"
                                class="mt-2"
                            />
                        </div>

                        <div class="col-span-1">
                            <x-input-label for="expires_at">
                                Expiration Date
                            </x-input-label>
    
                            <div class="mt-2">
                                <x-text-input
                                    type="datetime-local"
                                    name="expires_at"
                                    id="expires_at"
                                    class="w-full dark:[color-scheme:dark]"
                                    :value="old('expires_at', $shortlink->expires_at ? $shortlink->expires_at->format('Y-m-d\TH:i') : null)"
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
    
    <div class="mt-4 sm:mt-0 col-span-1 ">
        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 rounded-lg border border-gray-200 dark:border-gray-700">
            <div class="flex items-center bg-white dark:bg-gray-800">
                <div class="w-full">
                    <div class="p-4 text-gray-900 dark:text-gray-200">
                        <p>Created at</p>
        
                        {{ $shortlink->created_at->diffForHumans() }}
                    </div>
        
                    <div class="p-4 text-gray-900 dark:text-gray-200">
                        <p>Last modified at</p>
        
                        {{ $shortlink->updated_at->diffForHumans() }}
                    </div>

                    @if ($shortlink->expires_at)
                        <div class="p-4 text-gray-900 dark:text-gray-200">
                            <p>Expires at</p>
            
                            {{ $shortlink->expires_at->diffForHumans() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>