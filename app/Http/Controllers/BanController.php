<?php

namespace App\Http\Controllers;

use App\Models\Ban;
use App\Helpers\SortType;
use App\Http\Requests\BanFilterRequest;

class BanController extends Controller
{

    public function index()
    {
        $bans = Ban::orderByLastBan();

        return view('bans.list')->with('bans', $bans);
    }

    public function sort(string $param, int $type = SortType::ASC)
    {
        $bans = Ban::sortStatsList($param, $type);
        session(['sort' => $param]);

        return view('bans.list')->with('bans', $bans);
    }

    public function filter(BanFilterRequest $request)
    {
        $validated_data = $request->validated();

        // store filter preferences in session
        session(['filter' => $validated_data]);

        $bans = Ban::filterStatsList($validated_data);

        return view('bans.list')->with('bans', $bans);
    }

    public function show(string $id)
    {
        $ban = Ban::findOrFail($id);
        $bans = Ban::showStats($ban)->get();

        return view('bans.show')->with('bans', $bans)->with('jail', $ban->jail);
    }

    public function blacklist(string $id)
    {
        $ban = Ban::findOrFail($id);

        if ($ban->blacklist()) {
            session()->flash('error', __("{$ban->ip} was successfully blacklisted!"));
        } else {
            session()->flash('error', __("Something went wrong while banning ip {$ban->ip}!"));
        }

        return redirect()->back();
    }
}
