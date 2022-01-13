<?php

namespace App\Http\Controllers;

use App\Models\Jail;
use App\Helpers\SortType;
use App\Http\Requests\BanFilterRequest;
use App\Models\ConnectionLog;

class BanController extends Controller
{

    public function index()
    {
        $bans = ConnectionLog::orderByLastBan();

        return view('bans.list')->with('bans', $bans);
    }

    public function sort(string $param, int $type = SortType::ASC)
    {
        $bans = ConnectionLog::sortStatsList($param, $type);

        return view('bans.list')->with('bans', $bans);
    }

    public function filter(BanFilterRequest $request)
    {
        $validated_data = $request->validated();
        $bans = ConnectionLog::filterStatsList($validated_data);

        return view('bans.list')->with('bans', $bans);
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
