<x-app-layout>
    <div class="py-8">
        <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-8">
                <div class="flex flex-col">
                    <div class="bg-white">
                        <div class="fixed inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true">
                            <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>
                            <div
                                class="ml-auto relative max-w-xs w-full h-full bg-white shadow-xl py-4 pb-12 flex flex-col overflow-y-auto">
                                <div class="px-4 flex items-center justify-between">
                                    <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                                    <button type="button"
                                        class="-mr-2 w-10 h-10 bg-white p-2 rounded-md flex items-center justify-center text-gray-400">
                                        <span class="sr-only">Close menu</span>
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>

                                <!-- Filters -->
                                <form class="mt-4 border-t border-gray-200">
                                    <div class="border-t border-gray-200 px-4 py-6">
                                        <h3 class="-mx-2 -my-3 flow-root">
                                            <!-- Expand/collapse section button -->
                                            <button type="button"
                                                class="px-2 py-3 bg-white w-full flex items-center justify-between text-gray-400 hover:text-gray-500"
                                                aria-controls="filter-section-mobile-2" aria-expanded="false">
                                                <span class="font-medium text-gray-900">
                                                    Size
                                                </span>
                                                <span class="ml-6 flex items-center">
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </span>
                                            </button>
                                        </h3>
                                        <!-- Filter section, show/hide based on section state. -->
                                        <div class="pt-6 filter-dropdown">
                                            <div class="space-y-6">
                                                <div class="flex items-center">
                                                    <input id="filter-mobile-size-0" name="size[]" value="2l"
                                                        type="checkbox"
                                                        class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                                    <label for="filter-mobile-size-0"
                                                        class="ml-3 min-w-0 flex-1 text-gray-500">
                                                        2L
                                                    </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="filter-mobile-size-1" name="size[]" value="6l"
                                                        type="checkbox"
                                                        class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                                    <label for="filter-mobile-size-1"
                                                        class="ml-3 min-w-0 flex-1 text-gray-500">
                                                        6L
                                                    </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="filter-mobile-size-2" name="size[]" value="12l"
                                                        type="checkbox"
                                                        class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                                    <label for="filter-mobile-size-2"
                                                        class="ml-3 min-w-0 flex-1 text-gray-500">
                                                        12L
                                                    </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="filter-mobile-size-3" name="size[]" value="18l"
                                                        type="checkbox"
                                                        class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                                    <label for="filter-mobile-size-3"
                                                        class="ml-3 min-w-0 flex-1 text-gray-500">
                                                        18L
                                                    </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="filter-mobile-size-4" name="size[]" value="20l"
                                                        type="checkbox"
                                                        class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                                    <label for="filter-mobile-size-4"
                                                        class="ml-3 min-w-0 flex-1 text-gray-500">
                                                        20L
                                                    </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="filter-mobile-size-5" name="size[]" value="40l"
                                                        type="checkbox" checked
                                                        class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                                    <label for="filter-mobile-size-5"
                                                        class="ml-3 min-w-0 flex-1 text-gray-500">
                                                        40L
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
                            <div class="mt-4">
                                @include('flash-message')
                            </div>
                            <div
                                class="relative z-10 flex items-baseline pt-4 sm:pt-6 lg:pt-8 pb-6 border-b border-gray-200">
                                <a href="{{ url()->previous() }}"
                                    class="px-3 py-1 bg-gray-800 hover:bg-gray-900 rounded text-sm text-gray-50">
                                    Back
                                </a>
                                <div class="flex flex-grow items-center justify-end">
                                    <div class="relative inline-block text-left">
                                        <!-- Sort !-->
                                        <button type="button"
                                            class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900"
                                            id="menu-button" aria-expanded="false" aria-haspopup="true">
                                            Sort
                                            <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                        <livewire:protocol-traffic-sort />
                                    </div>
                                    <button type="button"
                                        class="p-2 -m-2 ml-4 sm:ml-6 text-gray-400 hover:text-gray-500 lg:hidden">
                                        <span class="sr-only">Filters</span>
                                        <svg class="w-5 h-5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <section aria-labelledby="products-heading" class="pt-6 pb-24">
                                <div class="grid grid-cols-1 lg:grid-cols-4 gap-x-8 gap-y-10">
                                    <!-- Filters -->
                                    <livewire:protocol-traffic-filter />

                                    <!-- Product grid -->
                                    <livewire:protocol-traffic-list />
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

                <script src="{{ asset('/js/dropdown.js') }}"></script>
                <script src="{{ asset('/js/notification.js') }}"></script>
            </div>
        </div>
    </div>

</x-app-layout>
