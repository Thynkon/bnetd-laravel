<?php

namespace App\Http\Controllers;

use App\Models\Ban;
use App\Models\Jail;

class DashboardController extends Controller
{
    public function index()
    {
        $jails = Jail::all();
        $stats = Ban::countBansPerCountry();

        return view('dashboard')->with([
            'jails' => $jails,
            'stats' => $stats,
        ]);
    }
}
