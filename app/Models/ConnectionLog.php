<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class ConnectionLog extends Model
{
    use HasFactory;

    protected $table = "connection_logs";
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'ip',
        'timestamp',
        'port',
        'jail',
        'username',
    ];

    public static function byJail(string $jail)
    {
        return ConnectionLog::where('jail', $jail);
    }
}
