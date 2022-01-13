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
        $logs = ConnectionLog::sortStatsList('last_ban', SortType::DESC);


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

    public function show(string $id)
    {
        $ban = ConnectionLog::findOrFail($id);
        $bans = ConnectionLog::showStats($ban)->get();

        return view('bans.show')->with('bans', $bans)->with('jail', $ban->jail);
    }

    public function blacklist (string $id)
    {
        dd($id);
    }
}
