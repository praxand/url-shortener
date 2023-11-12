<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-4">
                <div class="flex justify-between items-center">
                    <h2
                        class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight"
                    >
                        QR Codes
                    </h2>

                    <a href="{{ route('quick-response-codes.create') }}">
                        <x-primary-button> New QR Code </x-primary-button>
                    </a>
                </div>

                @if ($codes->isEmpty())
                    @include('quick-response-codes.partials.empty')
                @else
                    <div class="hidden sm:block">
                        @include('quick-response-codes.partials.table')
                    </div>

                    <div class="block sm:hidden">
                        @include('quick-response-codes.partials.grid')
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
