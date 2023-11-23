<?php

namespace App\Http\Controllers;

use App\Models\RfidData;
use App\Models\Ternak; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RfidDataController extends Controller
{

    public function store(Request $request)
    {
        $api_key_value = "wjru120vbr8qwr82rn210c8y218";
        $api_key = $request->input('api_key');

        if ($api_key == $api_key_value) {
            $rfidData = new RfidData();
            $rfidData->rfid = $request->input('rfid');
            $rfidData->nama = $request->input('nama');
            $rfidData->tempat = $request->input('tempat');
            $rfidData->save();

            return response()->json(['message' => 'Data RFID berhasil disimpan'], 201);
        } else {
            return response()->json(['message' => 'API Key salah'], 401);
        }
    }

    // public function store(Request $request)
    // {
    //     // Validasi data jika diperlukan
    //     $request->validate([
    //         'rfid' => 'required',
    //         'nama' => 'required',
    //         'tempat' => 'required',
    //     ]);

    //     // Simpan data ke database
    //     RfidData::create([
    //         'rfid' => $request->input('rfid'),
    //         'nama' => $request->input('nama'),
    //         'tempat' => $request->input('tempat'),
    //     ]);

    //     // Redirect atau berikan respons sesuai kebutuhan
    //     return back()->with('success', 'Data RFID berhasil disimpan.');
    // }


    public function getLatestData()
    {
        $latestRfidData = RfidData::orderBy('created_at', 'desc')->take(3)->get();
    
        $rfidValues = $latestRfidData->pluck('rfid')->toArray();
    
        $ternakData = Ternak::whereIn('rfid_ternak', $rfidValues)->get();
    
        return response()->json($ternakData);
    }
    
    public function getLatestRfidAndShowTernak()
    {
        // Mengambil nilai RFID terakhir dari tabel rfid_data
        $latestRfid = RfidData::latest()->first();

        // Inisialisasi variabel
        $ternakData = [];
        $nama = null;
        $tempat = null;

        if ($latestRfid) {
            $rfidValue = $latestRfid->rfid;
            $nama = $latestRfid->nama;
            $tempat = $latestRfid->tempat;

            // Mencari data ternak berdasarkan RFID terakhir
            $ternakData = Ternak::where('rfid', $rfidValue)->get();
        }

        return view('ternak.rfid', compact('ternakData'));
    }
    }
