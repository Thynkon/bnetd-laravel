<?php

namespace App\Http\Livewire;

use App\Models\NicGlobalTraffic;
use Carbon\Carbon;
use Livewire\Component;

class NetworkTraffics extends Component
{
    public $networkTraffics;

    public function mount()
    {
        $_networkTraffics = NicGlobalTraffic::updatedSince(1)->orderBy('ts', 'asc')->get();
        $date = Carbon::today()->subDays(1);

        for ($i = 0; $i < 24; $i++) {
            $_date = $date->addHour($i);
            $this->networkTraffics[$i] = $_networkTraffics->whereBetween('ts', [$_date->getTimestamp(), $_date->addHour()->getTimestamp()])->pluck('rx')->sum;
        }

        dd($this->networkTraffics);
    }

    public function render()
    {
        return view('livewire.network-traffics');
    }
}
