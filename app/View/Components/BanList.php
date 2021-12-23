<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Collection;

class BanList extends Component
{
    public Collection $logs;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Collection $logs)
    {
        $this->logs = $logs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ban-list');
    }
}
