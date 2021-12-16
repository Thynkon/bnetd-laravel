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
        <button wire:click="block" class="px-2 py-1 bg-gray-800 hover:bg-gray-900 rounded text-sm text-gray-50">{{ $user->active ?  __('Block') : __('Unblock') }}</button>
        <button wire:click="remove" class="ml-2 px-2 py-1 bg-red-500 hover:bg-red-600 rounded text-sm text-gray-50">{{ __('Delete') }}</button>
    </div>
</div>
