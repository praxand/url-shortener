<ul class="grid grid-cols-1 gap-x-6 gap-y-8 lg:grid-cols-3 xl:gap-x-8">
    <li
        class="overflow-hidden rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800"
    >
        <div
            class="flex items-center gap-x-4 border-b border-gray-900/5 bg-gray-50 dark:bg-gray-900 p-6"
        >
            <div
                class="text-sm font-medium leading-6 text-gray-800 dark:text-gray-200"
            >
                title
            </div>

            <div x-data="{ open: false }" class="relative ml-auto">
                <button
                    @click="open = ! open"
                    type="button"
                    class="-m-2.5 block p-2.5 text-gray-400 hover:text-gray-500"
                >
                    <svg
                        class="h-5 w-5"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                        aria-hidden="true"
                    >
                        <path
                            d="M3 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM8.5 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM15.5 8.5a1.5 1.5 0 100 3 1.5 1.5 0 000-3z"
                        />
                    </svg>
                </button>

                <div
                    x-show="open"
                    class="absolute right-0 z-10 mt-0.5 w-32 origin-top-right rounded-md bg-white dark:bg-gray-800 py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none"
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                >
                    <a
                        href="#"
                        class="block px-3 py-1 text-sm leading-6 text-gray-900 dark:text-gray-200"
                        >View</a
                    >
                    <a
                        href="#"
                        class="block px-3 py-1 text-sm leading-6 text-gray-900 dark:text-gray-200"
                        >Edit</a
                    >
                </div>
            </div>
        </div>

        <dl
            class="-my-3 divide-y divide-gray-100 dark:divide-gray-700 px-6 py-4 text-sm leading-6"
        >
            <div class="flex justify-between gap-x-4 py-3">
                <dt class="text-gray-500 dark:text-gray-400">Last invoice</dt>

                <dd class="text-gray-700 dark:text-gray-300">
                    <time datetime="2023-01-22">January 22, 2023</time>
                </dd>
            </div>

            <div class="flex justify-between gap-x-4 py-3">
                <dt class="text-gray-500 dark:text-gray-400">Amount</dt>

                <dd class="flex items-start gap-x-2">
                    <div class="font-medium text-gray-900 dark:text-gray-100">
                        $14,000.00
                    </div>
                </dd>
            </div>
        </dl>
    </li>
</ul>
