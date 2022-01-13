<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use App\Helpers\SortType;
use Carbon\Carbon;

class ConnectionLog extends Model
{
    use HasFactory;

    protected $table = "connection_logs";
    public $timestamps = false;
    protected $visible = ['ip', 'port', 'jail'];
    protected $hidden = '_id';

    private static $query = [
        [
            '$group' => [
                '_id' => ['ip' => '$ip', 'jail' => '$jail', 'port' => '$port'],
                // this is the only way to tell mongodb to also fetch other fields that are not in the query
                // otherwise, aggregate will return 
                // "_id" => MongoDB\Model\BSONDocument {#1508 ▶}
                // "last_ban" => 1622274199
                // "nbr_bans" => 1
                'id'  => ['$first' => '$_id'],
                'ip'  => ['$first' => '$ip'],
                'jail'  => ['$first' => '$jail'],
                'port'  => ['$first' => '$port'],
                'last_ban'  => ['$max' => '$ts'],
                'nbr_bans'  => ['$sum' => 1],
            ]
        ],
    ];


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
        return self::fetch(static::$query);
    }

    private static function fetch(array $query)
    {
        return ConnectionLog::raw(function ($collection) use ($query) {
            return $collection->aggregate($query);
        });
    }

    public static function sortStatsList(string $filter, int $type)
    {
        $function = match ($type) {
            SortType::ASC => 'sortBy',
            SortType::DESC => 'sortByDesc',
            default => 'sortBy'
        };

        return self::statsList()->$function($filter);
    }

    public static function filterStatsList(array $filters)
    {
        $query = self::$query;
        $match = [];

        if (array_key_exists('jail', $filters)) {
            $match['jail'] = [
                '$in' => $filters['jail'],
            ];
        }

        // we have to cast ports to integers, otherwise the query does not work
        // this might be related to the way mongodb performs conditions
        if (array_key_exists('port', $filters)) {
            $filters['port'] = array_map(function ($element) {
                return intval($element);
            }, $filters['port']);

            $match['port'] = [
                '$in' => $filters['port'],
            ];
        }

        if (array_key_exists('ban', $filters)) {
            $match['last_ban'] = [
                '$gt' => Carbon::now()->subDays($filters['ban'][0])->getTimestamp(),
            ];
        }

        $query[] = [
            '$match' => $match
        ];


        $result = self::fetch($query);
        return $result;
    }

    public static function showStats(ConnectionLog $ban)
    {
        return ConnectionLog::where('jail', $ban->jail)
            ->where('port', $ban->port)
            ->where('ip', $ban->ip);
    }
}
