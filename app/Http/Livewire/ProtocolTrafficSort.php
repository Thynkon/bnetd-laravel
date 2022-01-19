<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProtocolTrafficSort extends Component
{
    public function sort($condition) {
        $this->emit('sort', $condition);
    }

    public function render()
    {
        return view('livewire.protocol.protocol-traffic-sort');
    }
}
