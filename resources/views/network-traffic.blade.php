<x-app-layout>
    <div class="py-8">
        <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-8">
                <div class="flex flex-col">
                    <div class="bg-white">
                        <div>
                            <main class="w-full mx-auto px-4 sm:px-6 lg:px-8">
                                <div class="relative z-10 flex items-baseline pt-4 sm:pt-6 lg:pt-8 pb-6 border-b border-gray-200">
                                    <a href="{{ url()->previous() }}" class="px-3 py-1 bg-gray-800 hover:bg-gray-900 rounded text-sm text-gray-50">
                                        Back
                                    </a>
                                    <div class="flex flex-grow items-center justify-end">
                                    </div>
                                </div>
                            </main>
                            <div class="w-full mx-auto px-4 sm:px-6 lg:px-8 py-8">
                                <livewire:network-traffics />

                                <a href="{{ route('network-protocol') }}" class="w-full px-4 py-2 bg-indigo-400 hover:bg-indigo-500 rounded text-sm text-white">
                                    {{ __('Show details')}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
