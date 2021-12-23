<?php

namespace App\Http\Controllers;

use App\Models\ConnectionLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BanController extends Controller
{
    public function index()
    {
        $logs = ConnectionLog::raw(function ($collection) {
            return $collection->aggregate([
                [
                    '$group' => [
                        '_id' => ['ip' => '$ip', 'jail' => '$jail', 'port' => '$port'],
                        'last_ban'  => ['$max' => '$ts'],
                        'nbr_bans'  => ['$sum' => 1],
                    ],
                ],
            ]);
        });

        return view('bans.list')->with('logs', $logs);
    }
}
