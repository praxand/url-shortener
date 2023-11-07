<div class="mt-8 flow-root">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <div
                class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg border border-gray-200 dark:border-gray-700"
            >
                <table
                    class="min-w-full divide-y divide-gray-300 dark:divide-gray-700"
                >
                    <thead class="bg-gray-50 dark:bg-gray-900">
                        <tr>
                            <th
                                scope="col"
                                class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 dark:text-white sm:pl-6"
                            >
                                Title
                            </th>

                            <th
                                scope="col"
                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-white"
                            >
                                New URL
                            </th>

                            <th
                                scope="col"
                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-white"
                            >
                                Original URL
                            </th>

                            <th
                                scope="col"
                                class="relative py-3.5 pl-3 pr-4 sm:pr-6"
                            >
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>

                    <tbody
                        class="divide-y divide-gray-200 dark:divide-gray-700 bg-white dark:bg-gray-800"
                    >
                        @foreach ($links as $link)
                        <tr>
                            <td
                                class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 dark:text-white sm:pl-6"
                            >
                                title
                            </td>

                            <td
                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 dark:text-gray-300"
                            >
                                link
                            </td>

                            <td
                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 dark:text-gray-300"
                            >
                                link
                            </td>

                            <td
                                class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6"
                            >
                                <a
                                    href="#"
                                    class="text-indigo-600 hover:text-indigo-900"
                                    >Edit
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
