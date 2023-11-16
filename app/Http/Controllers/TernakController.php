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

        $list_ras = [
            'Garut',
            'Ekor Gemuk',
            'Ekor Tipis',
            'Merio',
            'Suffolk',
            'Texel',
            'Domer',
            'Dorper',
            'Corriedele',
            'Batur',
            'Barbados Blackbelly',
            'Compass Agrinak',
        ];
        return view('ternak.input', compact('list_ras'));
    }

    public function add(Request $request)
    {

        $list_ras = [
            'Garut',
            'Ekor Gemuk',
            'Ekor Tipis',
            'Merio',
            'Suffolk',
            'Texel',
            'Domer',
            'Dorper',
            'Corriedele',
            'Batur',
            'Barbados Blackbelly',
            'Compass Agrinak',
        ];

        $data = $request->validate([
            'rfid' => 'nullable|string|max:50',
            'nama_ternak' => 'required|string|max:255|unique:ternaks',
            'ras' => 'nullable|in:' . implode(',', $list_ras),
            'jenis_kelamin' => 'required|in:Jantan,Betina',
            'tanggal_lahir' => 'required|date',
            'bobot_badan' => 'required|numeric|between:0,999.99',
            'deskripsi_fenotip' => 'nullable|string',
            'status_sekarang' => 'nullable|string',
            'id_anak' => 'nullable|numeric',
        ],[
            'nama_ternak.required' => 'Nama ternak is required',
            'nama_ternak.unique' => 'Nama ternak already exists',
            'ras.in' => 'Ras is not valid',
            'jenis_kelamin.in' => 'Jenis kelamin is not valid',
            'tanggal_lahir.date' => 'Tanggal lahir is not valid',
            'bobot_badan.numeric' => 'Bobot badan is not valid',
            'bobot_badan.between' => 'Bobot badan is not valid',
            'deskripsi_fenotip.string' => 'Deskripsi fenotip is not valid',
            'status_sekarang.string' => 'Status sekarang is not valid',
            'id_anak.numeric' => 'Id anak is not valid',
        ]);
        Ternak::create($data);
        return back()->withErrors([
            'input' => 'Cannot input data',
        ]);

        // return dd($data);
    }
}
