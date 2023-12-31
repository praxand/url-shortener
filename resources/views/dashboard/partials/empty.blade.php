<div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 rounded-lg border border-gray-200 dark:border-gray-700">
    <div class="flex items-center bg-white dark:bg-gray-800 h-64">
        <div class="mx-auto grid max-w-lg justify-items-center text-center">
            <div class="mb-4 rounded-full bg-gray-100 p-3 dark:bg-gray-500/20">
                <svg
                    class="h-6 w-6 text-gray-500 dark:text-gray-400"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    aria-hidden="true"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12"
                    />
                </svg>
            </div>

            <h4 class="text-base font-semibold leading-6 text-gray-950 dark:text-white">
                No shortlinks or QR Codes
            </h4>

            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                Create a shortlink or QR Code to get started.
            </p>

            <div class="flex shrink-0 items-center gap-3 flex-wrap justify-center mt-6">
                <div class="inline-flex space-x-2">
                    <a href="{{ route('shortlinks.create') }}">
                        <x-primary-button>
                            New shortlink
                        </x-primary-button>
                    </a>

                    <a href="{{ route('quick-response-codes.create') }}">
                        <x-primary-button>
                            New QR Code
                        </x-primary-button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
