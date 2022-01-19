<?php

namespace App\Http\Livewire;

use App\Models\NicProtocolTraffic;
use Livewire\Component;
use Livewire\WithPagination;

class ProtocolTrafficList extends Component
{
    use WithPagination;

    protected $listeners = ['sort'];

    private $protocols;
    private $sort;

    public function sort($attribute)
    {
        $this->sort = NicProtocolTraffic::orderBy($attribute);
    }

    public function render()
    {
        if (isset($this->sort)) {
            $this->protocols = $this->sort->today()->orderByDesc()->paginate(10);
        } else {
            $this->protocols = NicProtocolTraffic::today()->orderByDesc()->paginate(10);
        }

        return view('livewire.protocol.protocol-traffic-list')->with('protocols', $this->protocols);
    }
}
