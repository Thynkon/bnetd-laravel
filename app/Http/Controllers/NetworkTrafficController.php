<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NetworkTrafficController extends Controller
{
    public function index()
    {
        return view('network-traffic');
    }
}
