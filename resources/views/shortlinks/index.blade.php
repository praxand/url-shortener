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
                        <button
                            type="button"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                        >
                            New shortlink
                        </button>
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
