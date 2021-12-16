<div class="snap-center w-full px-4 py-2 bg-white rounded shadow">
    <h3 class="border-b border-gray-200 text-2xl">{{ $jail }} - {{ $options['ban_count'] }}</h3>
    <div class="w-full flex py-2">
        <div class="grow">
            <span class="block">{{ __('bantime') }}</span>
            <span class="block">{{ __('maxretry') }}</span>
        </div>
        <div>
            <span class="block font-bold">{{Carbon\CarbonInterval::seconds($options['bantime'])->cascade()->forHumans();}}</span>
            <span class="block font-bold">{{ $options['maxretry'] }}</span>
        </div>
    </div>
</div>
