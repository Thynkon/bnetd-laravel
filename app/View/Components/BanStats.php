<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Collection;

class BanStats extends Component
{
    public Collection $bans;
    public string $jail;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Collection $bans, string $jail)
    {
        $this->bans = $bans;
        $this->jail = $jail;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ban-stats');
    }
}
