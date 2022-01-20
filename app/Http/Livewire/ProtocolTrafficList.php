<?php

namespace App\Http\Livewire;

use App\Models\NicProtocolTraffic;
use Livewire\Component;
use Livewire\WithPagination;

class ProtocolTrafficList extends Component
{
    use WithPagination;

    protected $listeners = ['sort', 'filter'];

    private $protocols;
    private $sort;

    public function sort($attribute)
    {
        $this->sort = NicProtocolTraffic::orderBy($attribute);
    }

    public function filter($filter)
    {
        if ($filter['value'] == null) {
            dd('filter value is null');
            $this->sort = NicProtocolTraffic::today()->orderByDesc();
        } else {
            $value = is_numeric($filter['value']) ? (int) $filter['value'] : $filter['value'];
            $this->sort = NicProtocolTraffic::where($filter['attribute'], $value);
        }

        $this->render();
    }

    public function render()
    {
        if (isset($this->sort)) {
            $this->protocols = $this->sort->today()->orderByDesc();
        } else {
            $this->protocols = NicProtocolTraffic::today()->orderByDesc();
        }

        return view('livewire.protocol.protocol-traffic-list', [
            'countries' => $this->protocols->pluck('country')->unique(),
            'protocols' => $this->protocols->paginate(10)
        ]);
    }
}
