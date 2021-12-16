<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Jail extends Component
{
    private string $jail;
    private array  $options;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $jail, array $options)
    {
        $this->jail    = $jail;
        $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.jail')->with([
            'jail'    => $this->jail,
            'options' => $this->options,
        ]);
    }
}
