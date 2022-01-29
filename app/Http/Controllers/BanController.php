<?php

namespace App\Http\Controllers;

use App\Models\Ban;
use App\Helpers\SortType;
use App\Http\Requests\BanFilterRequest;

class BanController extends Controller
{

    public function index()
    {
        return view('bans');
    }

    public function show(string $id)
    {
        $ban = Ban::findOrFail($id);
        $bans = Ban::showStats($ban)->get();

        return view('ban')->with([
            'bans' => $bans,
            'jail' => $ban->jail
        ]);
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
