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
    
    public function pindahKandang() 
    {
        $riwayat_kandang = RiwayatKandang::all();
        $TernakIds = RiwayatKandang::pluck('id_ternak')->unique()->toArray();
        $KandangIds = RiwayatKandang::pluck('id_kandang')->unique()->toArray();
        $ternaks = Ternak::whereIn('id', $TernakIds)->get();
        $kandangs = Kandang::whereIn('id', $KandangIds)->get();
        return view('kandang.pindahkandang', compact('ternaks', 'kandangs', 'riwayat_kandang'));
    }

    public function input() 
    {
        return view('kandang.input');
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
        try {
            $ternak_id = Ternak::find($data['id_ternak'])->id;
            $kandang_id = Kandang::find($data['id_kandang'])->id;
            if ($ternak_id === null || $kandang_id === null) {
                return back()->withErrors([
                    'assign' => 'Cannot assign data',
                ]);
            }
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

    public function pindahKandangTo()
    {
        $data = $request->validate([
            'id_ternak' => 'required',
            'id_kandang_baru' => 'required',
        ], [
            'id_ternak.required' => 'ID ternak harus diisi',
            'id_kandang_baru.required' => 'ID kandang baru harus diisi',
        ]);

        try {
            $ternak_id = Ternak::find($data['id_ternak'])->id;
            $kandang_baru_id = Kandang::find($data['id_kandang_baru'])->id;
            if ($ternak_id === null || $kandang_lama_id === null || $kandang_baru_id === null) {
                return back()->withErrors([
                    'assign' => 'Cannot assign data',
                ]);
            }
            RiwayatKandang::create([
                'id_ternak' => $ternak_id,
                'id_kandang' => $kandang_baru_id,
                'tanggal_pengelompokan' => now(),
            ]);

            return back();
        } catch (\Exception $e) {
            return back()->withErrors([
                'assign' => 'Cannot assign data',
            ]);
        }
    }
    public function dataKandang()
    {
        return view('kandang.data');
    }
}
