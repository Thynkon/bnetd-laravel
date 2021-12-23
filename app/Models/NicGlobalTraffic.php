<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class NicGlobalTraffic extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function scopeUpdatedSince($query)
    {
        return $query->where('ts', '>=', Carbon::today()->subDays(1)->getTimestamp());
    }
}
