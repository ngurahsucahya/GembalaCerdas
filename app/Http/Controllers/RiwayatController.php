<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\RiwayatKawin;
use \App\Models\RiwayatLahir;
use \App\Models\RiwayatKesehatan;
use \App\Models\Ternak;

class RiwayatController extends Controller
{
    public function kesehatan()
    {
        $Rkesehatan = RiwayatKesehatan::all();
        return view('riwayat.kesehatan',compact('Rkesehatan'));
    }

    public function kawin()
    {
        $Rkawin = RiwayatKawin::all();
        return view('riwayat.kawin',compact('Rkawin') );
    }

    public function lahir()
    {
        return view('riwayat.lahir');
    }

    public function inputRkawin(){
        $list_pejantan=Ternak::all()->where('status_sekarang','Pejantan')->pluck('id');
        $list_induk=Ternak::all()->where('status_sekarang','Induk')->pluck('id');
        return view('riwayat.inputkawin', compact('list_pejantan','list_induk'));
    }

    public function addRkawin(Request $request)
    {
        $data = $request->all();
        
        RiwayatKawin::create($data);
        return back()->with('success', 'Data berhasil ditambahkan');;
    }

    public function inputRkesehatan($id){
        return view('riwayat.inputkesehatan',compact('id'));
    }

    public function addRkesehatan(Request $request)
    {
        $data = $request->all();
        
        RiwayatKesehatan::create($data);
        return back()->with('success', 'Data berhasil ditambahkan');;
    }
}
