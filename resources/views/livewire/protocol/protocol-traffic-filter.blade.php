<div>
    @foreach ($filters as $key => $filter)
        <livewire:protocol-traffic-filter-options :filter="$filter" :key="$key" />
    @endforeach
</div>
