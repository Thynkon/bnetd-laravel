<x-app-layout>
    <div class="py-8">
        <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <div class="bg-white">
                    <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
                        @include('flash-message')
                        <div
                            class="relative z-10 flex items-baseline pt-4 sm:pt-6 lg:pt-8 pb-6 border-b border-gray-200">
                            <a href="{{ url()->previous() }}"
                                class="px-3 py-1 bg-gray-800 hover:bg-gray-900 rounded text-sm text-gray-50">
                                Back
                            </a>
                            <div class="flex flex-grow items-center justify-end">
                                <div class="flex relative text-left items-center">
                                    <!-- Sort !-->
                                    <button type="button"
                                        class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900"
                                        id="menu-button" aria-expanded="false" aria-haspopup="true">
                                        Sort
                                        <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <livewire:ban.ban-sort />
                                </div>
                                <button type="button"
                                    class="p-2 -m-2 ml-4 sm:ml-6 text-gray-400 hover:text-gray-500 lg:hidden">
                                    <span class="sr-only">Filters</span>
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <section aria-labelledby="products-heading" class="pt-6 pb-24">
                            <!-- Table -->
                            <livewire:ban.ban-list />
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
