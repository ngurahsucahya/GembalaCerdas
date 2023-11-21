<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\SensorData; // Import model SensorData dengan namespace yang benar

class SensorDataController extends Controller
{
    public function store(Request $request)
    {
        $api_key_value = "wjru120vbr8qwr82rn210c8y218";
        $api_key = $request->input('api_key');

        if ($api_key == $api_key_value) {
            $sensorData = new SensorData();
            $sensorData->suhu = $request->input('suhu');
            $sensorData->kelembapan = $request->input('kelembapan');
            $sensorData->kandang=$request->input('kandang');
            $sensorData->save();

            return redirect()->back()->with('success', 'Data sensor berhasil disimpan!');
        } else {
            return redirect()->back()->with('error', 'API Key salah.');
        }
    }
}
