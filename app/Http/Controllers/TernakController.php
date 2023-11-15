<?php

namespace App\Http\Controllers;

use \App\Models\Ternak;

use Illuminate\Http\Request;

class TernakController extends Controller
{

    // Belum fix, cuma untuk test routing
    public function index()
    {
        // $ternak = Ternak::all();
        return view('ternak.index');
    }

    public function edit($id)
    {
        $ternak = Ternak::find($id);
        return view('ternak.edit', compact('ternak'));
    }

    public function update(Request $request, $id)
    {
        $ternak = Ternak::find($id);
        $ternak->update($request->all());
        return redirect()->intended('/ternak');
    }
    
    public function delete($id)
    {
        $ternak = Ternak::find($id);
        $ternak->delete();
        return redirect()->intended('/ternak');
    }

    public function add(Request $request)
    {
        Ternak::create($request->all());
        return redirect()->intended('/ternak');
    }
}
