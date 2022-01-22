<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class NicProtocolTraffic extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function scopeToday($query)
    {
        return $query->where('ts', '>=', Carbon::today()->getTimestamp());
    }

    public function scopeOrderByDateDesc($query)
    {
        return $query->orderBy('ts', 'desc');
    }

    public function scopeSortBy($query, $attribute)
    {
        return $query->orderBy($attribute);
    }

    public function scopeFilterByCountry($query, $countries)
    {
        return isset($countries) ? $query->whereIn('country', $countries) : $query;
    }

    public function scopeFilterByPort($query, $ports)
    {
        return isset($ports) ? $query->whereIn('port', $ports) : $query;
    }

    public function scopeFilterByNetworkTraffic($query, $networkTraffic)
    {
        if (!isset($networkTraffic)) return $query;

        switch (array_pop($networkTraffic)) { // Take the biggest traffic
            case '< 1kb':
                return $query->where('pkt_len', '<', 1024);
            case '> 1kb':
                return $query->where('pkt_len', '>', 1024);
        }
    }

    public function scopeFilterByDate($query, $date)
    {
        if (!isset($date)) return $query;

        switch (array_pop($date)) { // Take the latest date
            case 'Last hour':
                return $query->where('ts', '>=', Carbon::now()->subHour()->getTimestamp());
            case 'Today':
                return $query->today();
            case 'Last 7 days':
                return $query->where('ts', '>=', Carbon::now()->subDays(7)->getTimestamp());
            case 'Last 30 days':
                return $query->where('ts', '>=', Carbon::now()->subDays(30)->getTimestamp());
        }
    }
}
