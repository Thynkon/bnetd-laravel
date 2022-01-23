<div>
    @foreach ($filters as $key => $filter)
        <livewire:protocol-traffic-filter-options :filter="$filter" :key="$key" />
    @endforeach
    <script src="{{ asset('/js/dropdown.js') }}"></script>
</div>
