<div>
    <div id="sort-list"
        class="origin-top-right absolute right-0 mt-8 w-40 rounded-md shadow-2xl bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden"
        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
        <div>
            @isset($sort)
                <button wire:click="resetSort"
                    class="w-full block px-4 py-2 border-b-2 border-gray-100 hover:bg-gray-100 text-left text-sm font-medium text-gray-800">
                    Reset
                </button>
            @endisset
            <button wire:click="sort('country')"
                class="w-full block px-4 py-2 hover:bg-gray-100 text-left text-sm font-medium text-gray-800">
                Country
            </button>
            <button wire:click="sort('ts')"
                class="w-full block px-4 py-2 hover:bg-gray-100 text-left text-sm font-medium text-gray-800">
                Date
            </button>
            <button wire:click="sort('pkt_len')"
                class="w-full block px-4 py-2 hover:bg-gray-100 text-left text-sm font-medium text-gray-800">
                Packet Length
            </button>
            <button wire:click="sort('port')"
                class="w-full block px-4 py-2 hover:bg-gray-100 text-left text-sm font-medium text-gray-800">
                Port
            </button>
        </div>
    </div>
    <span class="ml-2 p-2 bg-green-100 rounded text-green-800 capitalize">
        @isset($sort)
            {{ $sort }}
        @else
            {{ __('none') }}
        @endisset
    </span>

    <script src="{{ asset('/js/dropdown.js') }}"></script>
</div>
