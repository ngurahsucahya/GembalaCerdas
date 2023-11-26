<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KandangController extends Controller
{
    public function index() 
    {
        return view('kandang.index');
    }
    
    public function pindahKandang() 
    {
        return view('kandang.pindahkandang');
    }

    public function input() 
    {
        return view('kandang.input');
    }
}
