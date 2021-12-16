<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        $jails = [];

        foreach (Storage::files('fail2ban') as $jail) {
            $jail_name = pathinfo($jail, PATHINFO_FILENAME);
            $contents = Storage::path($jail);
            $jails[$jail_name] = parse_ini_file($contents);
        }

        return view('dashboard')->with([
            'users' => User::all(),
            'jails' => $jails,
        ]);
    }
}
