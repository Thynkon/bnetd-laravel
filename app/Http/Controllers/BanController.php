<?php

namespace App\Http\Controllers;

use App\Models\ConnectionLog;
use App\Helpers\SortType;

class BanController extends Controller
{

    public function index()
    {
        $logs = ConnectionLog::sortStatsList('last_ban', SortType::ASC);

        return view('bans.list')->with('logs', $logs);
    }

    public function sort(string $param, int $type = SortType::ASC)
    {
        $logs = ConnectionLog::sortStatsList($param, $type);

        return view('bans.list')->with('logs', $logs);
    }
}
