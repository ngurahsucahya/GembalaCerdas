<?php

namespace App\Http\Controllers;

use \App\Models\Ternak;
use \App\Models\notif;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_pejantan = Ternak::where('status_sekarang', 'Pejantan')->count();
        $jumlah_induk = Ternak::where('status_sekarang', 'Induk')->count();
        $jumlah_anak = Ternak::where('status_sekarang', 'Anak')->count();  
        $notiff=notif::all();      
        return view('index', 
            compact('jumlah_pejantan', 'jumlah_induk', 'jumlah_anak','notiff')
        );
    }
}
