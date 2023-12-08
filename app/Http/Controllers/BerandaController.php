<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Capster;
use App\Models\Paket;

class BerandaController extends Controller
{
    //
    public function index()
    {
        $pakets = Paket::all();
        $capster = Capster::all();
        return view('beranda', compact('capster','pakets'));
    }
}
