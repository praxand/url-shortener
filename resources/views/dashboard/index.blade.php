<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                @include('dashboard.partials.cards.shortlink')

                @include('dashboard.partials.cards.quick-response-code')
            </div>

            <div class="mt-4 space-y-2">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-xl border border-gray-200 dark:border-gray-700">
                    <div class="px-6 py-2">
                        <div class="text-gray-800 dark:text-gray-300">
                            Latest shortlinks and QR Codes
                        </div>
                    </div>
                </div>

                @if ($latests->isEmpty())
                    @include('dashboard.partials.empty')
                @else
                    <div class="hidden sm:block">
                        @include('dashboard.partials.table')
                    </div>

                    <div class="block sm:hidden">
                        @include('dashboard.partials.grid')
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
