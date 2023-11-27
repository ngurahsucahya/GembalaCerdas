<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Ternak;
use \App\Models\Kandang;
use \App\Models\RiwayatKandang;

class KandangController extends Controller
{
    public function index() 
    {
        return view('kandang.index');
    }

    public function add() 
    {
        return view('kandang.add');
    }

    public function assign() {
        $ternaks = Ternak::all();
        $kandangs = Kandang::all();
        return view('kandang.assign', compact('ternaks', 'kandangs'));
    }

    public function addKandang(Request $request) 
    {
        $data = $request->validate([
            'nama_kandang' => 'required',
            'kapasitas' => 'required',
            'deskripsi_kandang' => 'nullable'
        ], [
            'nama_kandang.required' => 'Nama kandang harus diisi',
            'kapasitas.required' => 'Kapasitas kandang harus diisi',
        ]);
        
        try {
            Kandang::create($data);
            return back();
        } catch (\Exception $e) {
            return back()->withErrors([
                'add' => 'Cannot add data',
            ]);
        }
    }

    public function assignTernakToKandang(Request $request)
    {
        $data = $request->validate([
            'id_ternak' => 'required',
            'id_kandang' => 'required',
        ], [
            'id_ternak.required' => 'ID ternak harus diisi',
            'id_kandang.required' => 'ID kandang harus diisi',
        ]);
        
        $ternak_id = Ternak::find($data['id_ternak'])->id;
        $kandang_id = Kandang::find($data['id_kandang'])->id;
        if ($ternak_id === null || $kandang_id === null) {
            return back()->withErrors([
                'assign' => 'Cannot assign data',
            ]);
        }


        try {
            
            RiwayatKandang::create([
                'id_ternak' => $ternak_id,
                'id_kandang' => $kandang_id,
                'tanggal_pengelompokan' => now(),
            ]);

            return back();
        } catch (\Exception $e) {
            return back()->withErrors([
                'assign' => 'Cannot assign data',
            ]);
        }
    }
}
