<?php

namespace App\Http\Controllers;

use App\Models\Jail;
use App\Helpers\SortType;
use App\Http\Requests\FilterConnectionLogRequest;
use Illuminate\Http\Request;
use App\Models\ConnectionLog;

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

    public function filter(Request $request)
    {
        $logs = ConnectionLog::filterStatsList($request->all());

        return view('bans.list')->with('logs', $logs);
    }
}
