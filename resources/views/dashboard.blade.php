<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="py-8">
            <h2 class="text-2xl mb-4">{{ __('Jails') }}</h2>
            <div class="flex items-stretch space-x-12 snap-x overflow-x-auto">
                @foreach ($jails as $key => $options)
                    <x-jail jail="{{ $key }}" :options="$options" />
                @endforeach
            </div>
        </div>

        <div class="py-8">
            <h2 class="text-2xl mb-4">{{ __('Contries with most bans') }}</h2>
            <div class="grid grid-cols-3 gap-4">
                @foreach ($stats as $stat)
                    <x-country-stat :stat="$stat" />
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
