<?php

namespace App\Http\Livewire;

use App\Models\NicProtocolTraffic;
use Livewire\Component;

class ProtocolTrafficList extends Component
{
    public $protocols;
    
    public function mount()
    {
        $this->protocols = NicProtocolTraffic::today()->orderByDesc()->get();
    }

    public function render()
    {
        return view('livewire.protocol.protocol-traffic-list');
    }
}
