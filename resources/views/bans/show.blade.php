<x-app-layout>
    <div class="py-8">
        <div class="w-full mx-auto px-4 sm:px-6 lg:px-8 space-y-8 flex flex-col">
            <div class="bg-white">
                <main class="w-full mx-auto px-4 sm:px-6 lg:px-8 pt-6 pb-24">
                    <div class="mt-4">
                        @include('flash-message')
                    </div>
                    <x-ban-stats :bans="$bans" :jail="$jail" />
                </main>
            </div>
        </div>
    </div>

    <script src="{{ asset('/js/dropdown.js') }}"></script>
</x-app-layout>
