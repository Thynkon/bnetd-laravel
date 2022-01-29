<?php

namespace App\Http\Livewire\Ban;

use Livewire\Component;

class BanSort extends Component
{
    public string|null $sort;

    public function resetSort()
    {
        $this->sort(null);
    }

    public function sort($attribute)
    {
        $this->sort = $attribute;
        $this->emit('sort', $attribute);
    }

    public function render()
    {
        return view('livewire.ban.ban-sort');
    }
}
