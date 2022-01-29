<?php

namespace App\Http\Livewire\Ban;

use App\Models\Ban;
use Livewire\Component;
use Livewire\WithPagination;

class BanList extends Component
{
    use WithPagination;

    protected $listeners = ['sort', 'filter'];

    public  $sort;
    public  $filters;

    public function sort($attribute)
    {
        $this->sort = $attribute;
    }

    /*
    public function filter($slug, $filter)
    {
        $this->filters[$slug] = $filter;
    }
    */

    public function render()
    {
        $bans = isset($this->sort) ?
            Ban::sortBy($this->sort) :
            Ban::orderBy('ts', 'desc');
        //;

        /*
        $bans
            ->filterByCountry($this->filters['CONT']        ?? [])
            ->filterByPort($this->filters['PORT']           ?? [])
            ->filterByNetworkTraffic($this->filters['NETT'] ?? [])
            ->filterByDate($this->filters['DATE']           ?? []);
        */

        return view('livewire.ban.ban-list', [
            'countries' => $bans->pluck('country')->unique(),
            'bans' => $bans->paginate(10)
        ]);
    }
}
