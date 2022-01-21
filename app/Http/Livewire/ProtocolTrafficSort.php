<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProtocolTrafficSort extends Component
{
    public string|null $sort;

    public function resetSort()
    {
        $this->sort = null;
        $this->emit('resetSort');
    }

    public function sort($attribute)
    {
        $this->sort = $attribute;
        $this->emit('sort', $attribute);
    }

    public function render()
    {
        return view('livewire.protocol.protocol-traffic-sort');
    }
}
