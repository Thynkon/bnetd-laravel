<div class="grid grid-cols-1 lg:grid-cols-4 gap-x-8 gap-y-10">
    <!-- Filters -->
    <form class="hidden lg:block" action="{{ route('bans.filter') }}" method="post">
        @csrf
        <button
            class="px-2 py-1 mt-4 sm:tp-6 lg:mt-8 bg-gray-800 hover:bg-gray-900 rounded text-sm text-gray-50 w-full h-10">
            Apply
        </button>
    </form>

    <!-- Product grid -->
    <div class="lg:col-span-3">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 table-auto">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Ip
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Jail
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Port
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Number of bans
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Last ban
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($bans as $ban)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $ban->ip }}
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                {{ $ban->country }}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                            {{ $ban->jail }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            {{ $ban->port }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $ban->nbr_bans }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ Carbon\Carbon::createFromTimestamp($ban->last_ban)->diffForHumans() }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <div class="flex justify-between">
                                            <a href="{{ route('bans.blacklist', ['id' => $ban->id]) }}"
                                                class="text-indigo-600 hover:text-indigo-900">{{ __('Blacklist') }}</a>
                                            <a href="{{ route('bans.show', ['id' => $ban->id]) }}"
                                                class="text-indigo-600 hover:text-indigo-900">{{ __('Show details') }}</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="my-2">
                    {{ $bans->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
