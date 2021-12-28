<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use App\Helpers\SortType;

class ConnectionLog extends Model
{
    use HasFactory;

    protected $table = "connection_logs";
    public $timestamps = false;
    protected $visible = ['ip', 'port', 'jail'];
    protected $hidden = '_id';


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

    public static function statsList()
    {
        return ConnectionLog::raw(function ($collection) {
            return $collection->aggregate([
                [
                    '$group' => [
                        '_id' => ['ip' => '$ip', 'jail' => '$jail', 'port' => '$port'],
                        // this is the only way to tell mongodb to also fetch other fields that are not in the query
                        // otherwise, aggregate will return 
                        // "_id" => MongoDB\Model\BSONDocument {#1508 ▶}
                        // "last_ban" => 1622274199
                        // "nbr_bans" => 1
                        'ip'  => ['$first' => '$ip'],
                        'jail'  => ['$first' => '$jail'],
                        'port'  => ['$first' => '$port'],
                        'last_ban'  => ['$max' => '$ts'],
                        'nbr_bans'  => ['$sum' => 1],
                    ],
                ],
            ]);
        });
    }

    public static function sortStatsList(string $filter, int $type)
    {
        $function = match($type) {
            SortType::ASC => 'sortBy',
            SortType::DESC => 'sortByDesc',
            default => 'sortBy'
        };

        return self::statsList()->$function($filter);
    }
}
