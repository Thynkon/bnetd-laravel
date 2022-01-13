<?php

namespace App\Http\Livewire;

use App\Models\NicGlobalTraffic;
use Carbon\Carbon;
use Livewire\Component;

class NetworkTraffics extends Component
{
    public $networkTraffics;
    public $days;

    public function mount()
    {
        $this->updatedDays();
    }

    public function updatedDays()
    {
        $this->reset('networkTraffics');

        switch ($this->days) {
            case 1:
                $this->byDay();
                break;
            case 7:
                $this->byWeek();
                break;
            case 30:
                $this->byMonth();
                break;
            default:
                $this->byDay();
        }

        $this->dispatchBrowserEvent('contentChanged');
        $this->render();
    }

    private function byDay()
    {
        $networkTraffics = NicGlobalTraffic::updatedSince(1)->get()->groupBy(function ($item) {
            return Carbon::parse($item['ts'])->hour;
        });

        for ($i = 0; $i < 24; $i++) {
            $this->networkTraffics[$i . "h"] = isset($networkTraffics[$i]) ? intdiv(intdiv($networkTraffics[$i]->sum('rx'), 1024), 1024) : 0;
        }
    }

    private function byWeek()
    {
        $period = now()->subDays(6)->daysUntil(now());

        $week = [];
        foreach ($period as $date) {
            $week[] = [
                'date' => $date->day,
                'value' => $date->dayName,
            ];
        }

        $networkTraffics = NicGlobalTraffic::updatedSince(count($week))->get()->groupBy(function ($item) {
            return Carbon::parse($item['ts'])->day;
        });

        foreach ($week as $day) {
            $this->networkTraffics[$day['date']] = isset($networkTraffics[$day['date']]) ? intdiv(intdiv($networkTraffics[$day['date']]->sum('rx'), 1024), 1024) : 0;
        }
    }

    private function byMonth()
    {
        $period = now()->subMonths(12)->monthsUntil(today()->startOfMonth());

        $months = [];
        foreach ($period as $date) {
            $months[] = $date->shortMonthName;
        }

        $networkTraffics = NicGlobalTraffic::updatedSince(365)->get()->groupBy(function ($item) {
            return Carbon::parse($item['ts'])->month;
        });

        for ($i = 0; $i < count($period); $i++) {
            $this->networkTraffics[$months[$i]] = isset($networkTraffics[$i]) ? intdiv(intdiv($networkTraffics[$i]->sum('rx'), 1024), 1024) : 0;
        }
    }

    public function render()
    {
        return view('livewire.network-traffics');
    }
}
