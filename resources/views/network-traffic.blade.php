<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="py-8">
            <livewire:network-traffics />
        </div>

        <a href="{{ route('network-protocol') }}"
            class="w-full px-4 py-2 bg-indigo-400 hover:bg-indigo-500 rounded text-sm text-white">Show details</a>
    </div>
</x-app-layout>
