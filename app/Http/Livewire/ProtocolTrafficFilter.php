<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProtocolTrafficFilter extends Component
{
    public $filters;

    public function mount($countries)
    {
        $this->filters = [
            ['name' => 'country', 'options' => $countries],
            ['name' => 'port', 'options' => ['22', '80', '443']],
            ['name' => 'network traffic', 'options' => ['< 1kb', '> 1kb']],
            ['name' => 'date', 'options' => ['Last hour', 'Today', 'Last 7 days', 'Last 30 days']],
        ];
    }

    public function render()
    {
        return view('livewire.protocol.protocol-traffic-filter');
    }
}
