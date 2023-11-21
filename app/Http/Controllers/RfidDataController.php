<?php

namespace App\Http\Controllers;

use App\Models\RfidData;
use App\Models\Ternak; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RfidDataController extends Controller
{
    // public function store(Request $request)
    // {
    //     $rfidData = $request->input('rfid');
    //     $nama = $request->input('nama');
    //     $tempat = $request->input('tempat');

    //     RfidData::create([
    //         'rfid' => $rfidData,
    //         'nama' => $nama,
    //         'tempat' => $tempat,
    //     ]);

    //     return response()->json(['message' => 'Data RFID berhasil disimpan'], 201);
    // }

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
    
        if ($latestRfid) {
            $rfidValue = $latestRfid->rfid;
            $nama = $latestRfid->nama;
            $tempat = $latestRfid->tempat;
    
            // Mencari data ternak berdasarkan RFID terakhir
            $ternakData = Ternak::where('rfid_ternak', $rfidValue)->get();
    
            return view('login.data_ternak', compact('ternakData', 'nama', 'tempat'));
        } else {
            // If no RFID value is found, you can pass an empty variable to the view
            $ternakData = [];
            $nama = null;
            $tempat = null;
            return view('login.data_ternak', compact('ternakData', 'nama', 'tempat'));
        }
    }
    


}
