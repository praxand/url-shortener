<div class="mt-8 flow-root">
    <div class="-mx-4 -my-2 sm:-mx-6 lg:-mx-8">
        <div class="min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <div
                class="overflow-auto shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg border border-gray-200 dark:border-gray-700"
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
                                <span class="sr-only">Actions</span>
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
                                    {{ $link->title }}
                                </td>

                                <td
                                    class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 dark:text-gray-300"
                                >
                                    <a
                                        href="{{ $link->short_link }}"
                                        target="_blank"
                                        class="text-blue-600 hover:underline"
                                        >{{ $link->short_link }}</a
                                    >
                                </td>

                                <td
                                    class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 dark:text-gray-300"
                                >
                                    <a
                                        href="{{ $link->original_link }}"
                                        target="_blank"
                                        class="text-blue-600 hover:underline"
                                        >{{ $link->original_link }}</a
                                    >
                                </td>

                                <td
                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6"
                                >
                                    <div class="space-x-4 inline-flex">
                                        <a
                                            href="{{ route('shortlinks.edit', $link) }}"
                                            class="text-gray-900 dark:text-gray-200"
                                        >
                                            Edit
                                        </a>

                                        <form
                                            action="{{ route('shortlinks.destroy', $link) }}"
                                            method="post"
                                        >
                                            @csrf @method('DELETE')

                                            <input
                                                type="submit"
                                                value="Delete"
                                                class="text-red-600 hover:text-red-900 hover:cursor-pointer"
                                            />
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="border-t border-gray-200 dark:border-gray-700">
                    {{ $links->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
