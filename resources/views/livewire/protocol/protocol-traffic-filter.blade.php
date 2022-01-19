<div>
    <form class="hidden lg:block" action="{{ route('bans.filter') }}" method="post">
        @csrf
        @php($options['ports'] = collect([22, 80, 443]))
        @php($options['bans'] = collect([1, 7, 30]))

        <x-filter title="Port" name="port" :options="$options['ports']" />
        <x-filter title="Last ban (in days)" name="ban" :options="$options['bans']" />

        <button
            class="px-2 py-1 mt-4 sm:tp-6 lg:mt-8 bg-gray-800 hover:bg-gray-900 rounded text-sm text-gray-50 w-full h-10">
            Apply
        </button>
    </form>
</div>
