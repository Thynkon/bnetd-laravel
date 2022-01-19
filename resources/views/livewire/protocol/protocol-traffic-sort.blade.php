<div id="sort-list"
    class="origin-top-right absolute right-0 mt-2 w-40 rounded-md shadow-2xl bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden"
    role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
    <div class="py-1" role="none">
        <a href="{{ route('bans.sort', ['param' => 'country']) }}"
            class="font-medium text-gray-900 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
            id="menu-item-0">Country</a>

        <a href="{{ route('bans.sort', ['param' => 'port']) }}"
            class="font-medium text-gray-900 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
            id="menu-item-0">Port</a>

        <a href="{{ route('bans.sort', ['param' => 'pkt_len	', 'type' => 'desc']) }}"
            class="font-medium text-gray-900 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
            id="menu-item-0">Packet Lenght</a>

        <a href="{{ route('bans.sort', ['param' => 'last_ban', 'type' => 'desc']) }}"
            class="font-medium text-gray-900 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
            id="menu-item-0">Date</a>
    </div>
</div>
