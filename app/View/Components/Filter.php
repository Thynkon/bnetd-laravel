<?php

namespace App\View\Components;

use Illuminate\Support\Collection as SupportCollection;
use Illuminate\View\Component;
use Jenssegers\Mongodb\Collection;

class Filter extends Component
{
    public string $title;
    public SupportCollection $options;
    public string $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title, string $name, SupportCollection $options)
    {
        $this->title = $title;
        $this->name = $name;
        $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.filter');
    }
}
