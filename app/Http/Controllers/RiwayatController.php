<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\RiwayatKawin;
use \App\Models\RiwayatKesehatan;
use \App\Models\RiwayatLahir;
use \App\Models\Anak;
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

    public function inputRiwayatKawin()
    {
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

        $data = [
            'id_pejantan' => $request->id_pejantan,
            'id_induk' => $request->id_induk,
            'tanggal_kawin' => $request->tanggal_kawin,
        ];

        // return dd($data);

        RiwayatKawin::create($data);
        return back()->with('success', 'Data berhasil ditambahkan');
    }

    public function inputRiwayatKesehatan($id)
    {
        return view('riwayat.inputkesehatan',compact('id'));
    }

    public function addRiwayatKesehatan(Request $request)
    {
        $data = $request->validate([
            'id_ternak' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
        ], [
            'id_ternak.required' => 'ID Ternak harus diisi',
            'tanggal.required' => 'Tanggal harus diisi',
            'keterangan.required' => 'Keterangan harus diisi',
        ]);
        
        RiwayatKesehatan::create($data);
        return back()->with('success', 'Data berhasil ditambahkan');;
    }

    public function inputRiwayatLahir($id)
    {
        return view('riwayat.inputlahir',compact('id'));
    }

    public function addRiwayatLahir(Request $request)
    {
        $request->validate([
            'id_kawin' => 'required',
            'tanggal_lahir' => 'required',
            'bobot_lahir' => 'required'

        ], [
            'id_kawin.required' => 'ID Kawin harus diisi',
            'tanggal_lahir.required' => 'Tanggal harus diisi',
            'bobot_lahir' => 'Bobot Harus diisi'
        ]);

        $data_anak = $request->bobot_lahir;
        $anak = Anak::create($data_anak);
        $data_lahir = [
            'id_kawin' => $request->id_kawin,
            'id_anak' => $anak->id,
            'tanggal_lahir' => $request->tanggal,
        ];
        RiwayatLahir::create($data_lahir);
        return redirect()->intended('/ternak/input')->with(compact('anak'));
    }
}
