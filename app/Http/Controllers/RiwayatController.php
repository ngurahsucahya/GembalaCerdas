<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function kesehatan()
    {
        return view('riwayat.kesehatan');
    }

    public function kawin()
    {
        return view('riwayat.kawin');
    }

    public function lahir()
    {
        return view('riwayat.lahir');
    }
}
