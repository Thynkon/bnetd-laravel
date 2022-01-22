<?php

namespace App\Http\Livewire;

use App\Models\NicProtocolTraffic;
use Livewire\Component;
use Livewire\WithPagination;

class ProtocolTrafficList extends Component
{
    use WithPagination;

    protected $listeners = ['sort', 'filter'];

    public  $sort;
    public  $filters;

    public function sort($attribute)
    {
        $this->sort = $attribute;
    }

    public function filter($slug, $filter)
    {
        $this->filters[$slug] = $filter;
    }

    public function render()
    {
        $protocols = isset($this->sort) ?
            NicProtocolTraffic::sortBy($this->sort) :
            NicProtocolTraffic::orderByDateDesc();

        $protocols
            ->filterByCountry($this->filters['CONT']        ?? [])
            ->filterByPort($this->filters['PORT']           ?? [])
            ->filterByNetworkTraffic($this->filters['NETT'] ?? [])
            ->filterByDate($this->filters['DATE']           ?? []);

        return view('livewire.protocol.protocol-traffic-list', [
            'countries' => $protocols->pluck('country')->unique(),
            'protocols' => $protocols->paginate(10)
        ]);
    }
}
