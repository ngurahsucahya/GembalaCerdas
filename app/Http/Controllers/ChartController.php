<?php

// app/Http/Controllers/ChartController.php

namespace App\Http\Controllers;

use App\Models\SensorData;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function getSensorData()
    {
        // Fetch sensor data from the database
        $sensorData = SensorData::all();

        $data = $sensorData->map(function ($entry) {
            return [
                'created_at' => $entry->created_at->toDateString(), // or the appropriate format for your data
                'suhu' => $entry->suhu,
                'kelembapan' => $entry->kelembapan,
            ];
        });

        return response()->json($data);
    }
}
