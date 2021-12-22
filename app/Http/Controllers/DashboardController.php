<?php

namespace App\Http\Controllers;

use App\Models\ConnectionLog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Stevebauman\Location\Facades\Location;

class DashboardController extends Controller
{
    public function index()
    {
        $jails = [];

        foreach (Storage::files('fail2ban') as $jail) {
            $jail_name = pathinfo($jail, PATHINFO_FILENAME);
            $contents = Storage::path($jail);

            $jails[$jail_name] = parse_ini_file($contents);
            $jails[$jail_name]['ban_count'] = ConnectionLog::byJail($jail_name)->count();
        }

/*
        $ips = ConnectionLog::all('ip')->pluck('ip');
        $stats = collect();
        $location = null;
        foreach ($ips as $ip) {
            if ($location = Location::get($ip)) {
                    // If country isn't already set, add it
                    if (!$stats->contains(function($stat) use ($location) {
                        return $stat["country"] == $location->countryName;
                    })) {
                        $stats[] = ["country" => $location->countryName, "ban_count" => 1];
                    } else {
                        // Update ban_count
                        $stats->transform(function($stat) use ($location) {
                            if ($stat["country"] == $location->countryName) {
                                $stat["ban_count"] += 1;
                            }
                            return $stat;
                        });
                    }
            } else {
            }
        }
        $stats = collect($stats)->sortBy(callback: 'ban_count', descending: true);
*/

        // This is a temporary solution to solve performance issues. This will be solved by performing requests
        // using threads (laravel queues)
        $stats = [
            [
                "country" => "United States",
                "ban_count"=> 5
            ],
            [
                "country" => "China",
                "ban_count"=> 3
            ],
            [
                "country" => "Canada",
                "ban_count"=> 2
            ],
            [
                "country" => "South Korea",
                "ban_count"=> 1
            ],
            [
                "country" => "Singapore",
                "ban_count"=> 1
            ],
            [
                "country" => "France",
                "ban_count"=> 1
            ],
            [
                "country" => "Tanzania",
                "ban_count"=> 1
            ],
        ];

        return view('dashboard')->with([
            'jails' => $jails,
            'stats' => $stats,
        ]);
    }
}
