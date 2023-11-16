<?php

namespace App\Http\Controllers;

use \App\Models\Ternak;
use \App\Models\Induk;
use \App\Models\Pejantan;
use \App\Models\RiwayatKawin;
use \App\Models\RiwayatLahir;
use \App\Models\Anak;

use Illuminate\Http\Request;

class TernakController extends Controller
{

    // Belum fix, cuma untuk test routing
    public function index()
    {
        $ternak = Ternak::all();
        return view('ternak.index', compact('ternak'));
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
        return back();
    }
    
    public function delete($id)
    {
        $ternak = Ternak::find($id);
        $ternak->delete();
        return redirect()->intended('/ternak');
    }

    public function input(){
        return view('ternak.input');
    }

    public function add(Request $request)
    {
        $data = $request->validate([
            'rfid' => 'nullable|string|max:50',
            'nama_ternak' => 'required|string|max:255|unique:ternaks',
            'ras' => 'nullable|in:Garut,Ekor Gemuk,Ekor Tipis,Merio,Suffolk,Texel,Domer,Dorper,Corriedele,Batur,Barbados Blackbelly,Compass Agrinak',
            'jenis_kelamin' => 'required|in:Jantan,Betina',
            'tanggal_lahir' => 'required|date',
            'bobot_badan' => 'required|numeric|between:0,99999.99',
            'deskripsi_fenotip' => 'nullable|string',
        ],[
            'nama_ternak.required' => 'Nama ternak is required',
            'nama_ternak.unique' => 'Nama ternak already exists',
            'ras.in' => 'Ras is not valid',
            'jenis_kelamin.in' => 'Jenis kelamin is not valid',
            'tanggal_lahir.date' => 'Tanggal lahir is not valid',
            'bobot_badan.numeric' => 'Bobot badan is not valid',
            'bobot_badan.between' => 'Bobot badan is not valid',
        ]);
        Ternak::create($data);
        return back()->withErrors([
            'input' => 'Cannot input data',
        ])->withInput($request->only('name', 'email'));

        // return dd($data);
    }
}
