<div class="border-b border-gray-200 py-6">
    <h3 class="-my-3 flow-root filter-button">
        <!-- Expand/collapse section button -->
        <button type="button"
            class="py-3 bg-white w-full flex items-center justify-between text-sm text-gray-400 hover:text-gray-500"
            aria-controls="filter-section-2" aria-expanded="false">
            <span class="font-medium text-gray-900">{{ $title }}</span>
            <span class="ml-6 flex items-center">
                <!--
            Expand icon, show/hide based on section open state.

            Heroicon name: solid/plus-sm
          -->
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                        clip-rule="evenodd" />
                </svg>
                <!--
            Collapse icon, show/hide based on section open state.

            Heroicon name: solid/minus-sm
          -->
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    aria-hidden="true">
                    <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>
            </span>
        </button>
    </h3>
    <!-- Filter section, show/hide based on section state. -->
    <div class="pt-6 filter-dropdown">
        <div class="space-y-4">
            @foreach ($options as $option)
                <div class="flex items-center">
                    <input id="{{ $option }}" name="{{ $name }}[]" value="{{ $option }}" type="checkbox"
                        class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                    <label for="{{ $option }}" class="w-full ml-3 text-sm text-gray-600">{{ $option }}</label>
                </div>
            @endforeach
        </div>
    </div>
</div>