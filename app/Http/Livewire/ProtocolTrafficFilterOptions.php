<?php

namespace App\Http\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;

class ProtocolTrafficFilterOptions extends Component
{
    public $filter;
    public Collection $activeOptions;

    public function mount()
    {
        $this->activeOptions = collect();
    }

    public function filter($value)
    {
        if ($this->activeOptions->contains($value)) {
            $item = $this->activeOptions->search($value);
            $this->activeOptions->forget($item);
        } else {
            $this->activeOptions->push(is_numeric($value) ? (int)$value : $value);
        }

        $this->emitUp('filter', $this->filter['slug'], $this->activeOptions);
    }

    public function render()
    {
        return view('livewire.protocol.protocol-traffic-filter-options');
    }
}
