<?php

namespace App\Http\Controllers;

use \App\Models\notif;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class NotifController extends Controller
{
    public function add(Request $request)
    {
        $data = $request->all();
        try {
            notif::create($data);
            $notiff= notif::all();
            return back();
        } catch (\Exception $e) {
            return back()->withErrors([
                'notif' => 'Cannot send notification',
            ]);
        }
    }
}