<?php

namespace App\Http\Livewire;

use App\Models\NicProtocolTraffic;
use Livewire\Component;
use Livewire\WithPagination;

class ProtocolTrafficList extends Component
{
    use WithPagination;

    protected $listeners = [
        'sort',
        'filterByCountry', 'filterByPort', 'filterByNetworkTraffic', 'filterByDate'
    ];

    public  $sort;
    public  $filters;

    public function sort($attribute)
    {
        $this->sort = $attribute;
    }

    public function filterByCountry($countries)
    {
        $this->filters['country'] = $countries;
    }

    public function filterByPort($ports)
    {
        $this->filters['port'] = $ports;
    }

    public function filterByNetworkTraffic($networkTraffic)
    {
        $this->filters['networkTraffic'] = $networkTraffic;
    }

    public function filterByDate($date)
    {
        $this->filters['date'] = $date;
    }

    public function render()
    {
        $protocols = isset($this->sort) ?
            NicProtocolTraffic::sortBy($this->sort) :
            NicProtocolTraffic::orderByDateDesc();

        if (isset($this->filters['country']) && count($this->filters['country']) > 0) {
            $protocols->filterByCountry($this->filters['country']);
        }
        if (isset($this->filters['port']) && count($this->filters['port']) > 0) {
            $protocols->filterByPort($this->filters['port']);
        }
        if (isset($this->filters['networkTraffic']) && count($this->filters['networkTraffic']) > 0) {
            $protocols->filterByNetworkTraffic($this->filters['networkTraffic']);
        }
        if (isset($this->filters['date']) && count($this->filters['date']) > 0) {
            $protocols->filterByDate($this->filters['date']);
        }

        return view('livewire.protocol.protocol-traffic-list', [
            'countries' => $protocols->pluck('country')->unique(),
            'protocols' => $protocols->paginate(10)
        ]);
    }
}
