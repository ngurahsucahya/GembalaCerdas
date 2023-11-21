<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\RiwayatKawin;
use \App\Models\RiwayatKesehatan;
use \App\Models\RiwayatLahir;
use \App\Models\Ternak;

class RiwayatController extends Controller
{
    public function kesehatan()
    {
        $RiwayatKesehatan = RiwayatKesehatan::all();
        return view('riwayat.kesehatan', compact('RiwayatKesehatan'));
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

    public function inputRiwayatKawin(){
        $list_pejantan = Ternak::where('status_sekarang', 'Pejantan')->select('id', 'nama_ternak')->get();
        $list_induk = Ternak::where('status_sekarang', 'Induk')->select('id', 'nama_ternak')->get();
        return view('riwayat.inputkawin', compact('list_pejantan','list_induk'));
        // return dd($list_pejantan, $list_induk);
    }

    public function addRiwayatKawin(Request $request)
    {
        $request->validate([
            'id_pejantan' => 'required',
            'id_induk' => 'required',
            'tanggal_kawin' => 'required',
        ], [
            'id_pejantan.required' => 'ID Pejantan harus diisi',
            'id_induk.required' => 'ID Induk harus diisi',
            'tanggal_kawin.required' => 'Tanggal kawin harus diisi',
        ]);

        $pejantan = Ternak::find($request->id_pejantan)->statusable_id;
        $induk = Ternak::find($request->id_induk)->statusable_id;

        $data = [
            'id_pejantan' => $pejantan,
            'id_induk' => $induk,
            'tanggal_kawin' => $request->tanggal_kawin,
        ];

        // return dd($data);

        RiwayatKawin::create($data);
        return back()->with('success', 'Data berhasil ditambahkan');
    }

    public function inputRiwayatKesehatan($id){
        return view('riwayat.inputkesehatan',compact('id'));
    }

    public function addRiwayatKesehatan(Request $request)
    {
        $data = $request->all();
        
        RiwayatKesehatan::create($data);
        return back()->with('success', 'Data berhasil ditambahkan');;
    }
}
