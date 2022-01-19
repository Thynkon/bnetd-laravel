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

    public function scopeOrderByAsc($query)
    {
        return $query->orderBy('ts', 'asc');
    }

    public function scopeOrderByDesc($query)
    {
        return $query->orderBy('ts', 'desc');
    }
}
