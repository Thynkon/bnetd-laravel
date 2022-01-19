<?php

namespace App\Http\Controllers;

use App\Models\Ban;
use App\Models\NicProtocolTraffic;

class NetworkProtocolController extends Controller
{
    public function index()
    {
        $protocols = NicProtocolTraffic::today()->orderByDesc()->get();

        return view('network-protocol')->with('protocols', $protocols);
    }
}
