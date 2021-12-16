<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<<<<<<< Updated upstream
            <div class="lg:w-1/3">
=======
            <div class="space-y-8">
                <div class="lg:w-1/3">
                    <livewire:dashboard-user-container />
                </div>

                <div>
                    <h2 class="text-2xl">{{ __('Jails') }}</h2>
                    <div class="flex items-stretch space-x-12 snap-x overflow-x-auto">
                        @foreach ($jails as $key => $options)
                            <x-jail jail="{{ $key }}" :options="$options" />
                        @endforeach
                    </div>
                </div>
>>>>>>> Stashed changes
            </div>
        </div>
    </div>
</x-app-layout>
