<?php

namespace App\Http\Livewire;

use App\Models\NicProtocolTraffic;
use Livewire\Component;
use Livewire\WithPagination;

class ProtocolTrafficList extends Component
{
    use WithPagination;

    private $protocols;

    public function mount()
    {
    }

    public function render()
    {
        $this->protocols = NicProtocolTraffic::today()->orderByDesc()->paginate(10);
        return view('livewire.protocol.protocol-traffic-list')->with('protocols', $this->protocols);
    }
}
