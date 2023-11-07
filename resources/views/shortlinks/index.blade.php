<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-4">
                <div class="flex justify-between items-center">
                    <h2
                        class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight"
                    >
                        Shortlinks
                    </h2>

                    <a href="{{ route('shortlinks.create') }}">
                        <x-primary-button>
                            New shortlink
                        </x-primary-button>
                    </a>
                </div>

                @if ($links->isEmpty())
                    @include('shortlinks.partials.empty')
                @else
                    <div class="hidden sm:block">
                        @include('shortlinks.partials.table')
                    </div>

                    <div class="block sm:hidden">
                        @include('shortlinks.partials.grid')
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
