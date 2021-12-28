<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-8">
                <div>
                    <x-ban-list :logs="$logs"/>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
