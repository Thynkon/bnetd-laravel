<?php

namespace App\Http\Livewire;

use App\Models\NicGlobalTraffic;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Livewire\Component;

class NetworkTraffics extends Component
{
    public $networkTraffics;

    public function mount()
    {
        $networkTraffics = NicGlobalTraffic::updatedSince(1)->get()->groupBy(function ($item) {
            return Carbon::parse($item['ts'])->hour;
        });

        for ($i = 0; $i < 24; $i++) {
            $this->networkTraffics[$i . "h"] = isset($networkTraffics[$i]) ? intdiv(intdiv($networkTraffics[$i]->sum('rx'), 1024), 1024) : 0;
        }
    }

    public function render()
    {
        return view('livewire.network-traffics');
    }
}
