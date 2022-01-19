<div id="sort-list" class="origin-top-right absolute right-0 mt-2 w-40 rounded-md shadow-2xl bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden"
    role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
    <div class="py-1" role="none">
        <button wire:click="sort('country')" class="font-medium text-gray-900 block px-4 py-2 text-sm">
            Country
        </button>
        <button wire:click="sort('port')" class="font-medium text-gray-900 block px-4 py-2 text-sm">
            Port
        </button>
        <button wire:click="sort('pkt_len')" class="font-medium text-gray-900 block px-4 py-2 text-sm">
            Packet Lenght
        </button>
        <button wire:click="sort('ts')" class="font-medium text-gray-900 block px-4 py-2 text-sm">
            Date
        </button>
    </div>
    <script src="{{ asset('/js/dropdown.js') }}"></script>
</div>
