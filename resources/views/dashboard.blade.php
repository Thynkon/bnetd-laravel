<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="lg:w-1/3">
                <h2 class="text-xl">Utilisateurs</h2>
                <div class="overflow-hidden shadow-sm sm:rounded-lg">
                    <div>
                        @foreach ($users as $user)
                            <div class="bg-white px-4 py-3 border-t border-gray-200">
                                <div class="flex items-center justify-between">
                                    <div class="flex-1">
                                        <p class="text-sm leading-5 font-medium text-gray-900">
                                            {{ $user->firstname }} {{ $user->lastname }}
                                        </p>
                                        <p class="mt-1 text-sm leading-5 text-gray-500">
                                            {{ $user->email }}
                                        </p>
                                    </div>
                                    <button
                                        class="px-2 py-1 bg-gray-800 hover:bg-gray-900 rounded text-sm text-gray-50">Bloquer</button>
                                    <button
                                        class="ml-2 px-2 py-1 bg-red-500 hover:bg-red-600 rounded text-sm text-gray-50">Supprimer</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
