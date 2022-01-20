<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProtocolTrafficFilterOptions extends Component
{
    public $filter;
    public $value;

    public function filter($value)
    {
        $this->value = ($value == $this->value) ? null : $value;
        $this->emit('filter', ['attribute' => $this->filter['name'], 'value' => $value]);
    }

    public function updatedValue($value)
    {
        $this->value = $value;
    }

    public function render()
    {
        return view('livewire.protocol.protocol-traffic-filter-options');
    }
}
