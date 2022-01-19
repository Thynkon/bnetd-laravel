<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProtocolTrafficSort extends Component
{
    public string $sort;

    public function sort($attribute) {
        $this->sort = $attribute;
        $this->emit('sort', $attribute);
    }

    public function render()
    {
        return view('livewire.protocol.protocol-traffic-sort');
    }
}
