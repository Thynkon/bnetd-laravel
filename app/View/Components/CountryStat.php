<?php

namespace App\View\Components;

use App\Models\Ban;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class CountryStat extends Component
{
    public Ban $stat;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Ban $stat)
    {
        $this->stat = $stat;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.country-stat')->with([
            'stat', $this->stat
        ]);
    }
}
