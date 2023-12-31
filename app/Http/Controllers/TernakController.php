<?php

namespace App\Http\Controllers;

use \App\Models\Ternak;
use \App\Models\Induk;
use \App\Models\Pejantan;
use \App\Models\RiwayatKawin;
use \App\Models\RiwayatLahir;
use \App\Models\Anak;
use App\Models\RfidData;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class TernakController extends Controller
{

    // Belum fix, cuma untuk test routing
    public function index()
    {
        $ternaks = Ternak::all();
        return view('ternak.index', compact('ternaks'));
    }

    public function edit($id)
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

        $ternak = Ternak::find($id);
        if ($ternak === null){
            return redirect()->intended('/ternak')->withErrors([
                'edit' => 'Cannot edit data',
            ]);
        }

        return view('ternak.edit', compact('ternak','list_ras'));
    }

    public function update(Request $request, $id)
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
            'nama_ternak' => 'required|string|max:255|unique:ternaks,nama_ternak,' . $id,
            'ras' => 'nullable|in:' . implode(',', $list_ras),
            'jenis_kelamin' => 'required|in:Jantan,Betina',
            'tanggal_lahir' => 'required|date',
            'bobot_badan' => 'required|numeric|between:0,999.99',
            'deskripsi_fenotip' => 'nullable|string',
            'status_sekarang' => 'nullable|in:Pejantan,Induk,Anak',
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

        $ternak = Ternak::find($id);
        if ($ternak === null){
            return back()->withErrors([
                'update' => 'Cannot update data',
            ]);
        }

        if ($data['jenis_kelamin'] === 'Jantan' && $data['status_sekarang'] === 'Induk'){
            return back()->withErrors([
                'update' => 'Invalid data',
            ]);
        } else if ($data['status_sekarang'] === 'Induk' && $ternak->status_sekarang === 'Pejantan'){
            return back()->withErrors([
                'update' => 'Invalid data',
            ]);
        } else if ($data['jenis_kelamin'] === 'Betina' && $data['status_sekarang'] === 'Pejantan'){
            return back()->withErrors([
                'update' => 'Invalid data',
            ]);
        } else if ($data['status_sekarang'] === 'Pejantan' && $ternak->status_sekarang === 'Induk'){
            return back()->withErrors([
                'update' => 'Invalid data',
            ]);
        }else if ($data['status_sekarang'] === 'Anak' && (is_null($data['id_anak']) || $ternak->status_sekarang === 'Induk' || $ternak->status_sekarang === 'Pejantan')){
            return back()->withErrors([
                'update' => 'Invalid data',
            ]);
        } else if ($ternak->status_sekarang === 'Anak'){
            if ($data['status_sekarang'] === 'Induk'){
                $status = Induk::create();
            } else if ($data['status_sekarang'] === 'Pejantan'){
                $status = Pejantan::create();
            }
        }
        
        if ($ternak->status_sekarang !== $data['status_sekarang']){
            $ternak->update($data);
            $status->ternak()->save($ternak);
        } else {
            $ternak->update($data);
        }
        
        return back()->with('success', 'Data berhasil diupdate');
    }
    
    public function delete($id)
    {   
        $ternak = Ternak::find($id);
        if (is_null($ternak)){
            return response()->json(['gagal' => true]);
        }

        if ($ternak->status_sekarang === 'Induk'){
            $induk = Induk::where('id', $ternak->statusable_id)->firstOrFail();
            $induk->delete();
        } else if ($ternak->status_sekarang === 'Pejantan'){
            $pejantan = Pejantan::where('id', $ternak->statusable_id)->firstOrFail();
            $pejantan->delete();
        }
        $ternak->delete();
        return response()->json(['success' => true]);
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
            'status_sekarang' => 'nullable|in:Pejantan,Induk,Anak',
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

        if ($data['jenis_kelamin'] === 'Jantan' && $data['status_sekarang'] === 'Induk'){
            return back()->withErrors([
                'input' => 'Invalid data',
            ]);
        } else if ($data['jenis_kelamin'] === 'Betina' && $data['status_sekarang'] === 'Pejantan'){
            return back()->withErrors([
                'input' => 'Invalid data',
            ]);
        } else if (is_null($data['id_anak']) && $data['status_sekarang'] === 'Anak'){
            return back()->withErrors([
                'input' => 'Invalid data',
            ]);
        }

        try {
            $ternak = Ternak::create($data);
            if ($data['status_sekarang'] === 'Induk'){
                $induk = Induk::create();
                $induk->ternak()->save($ternak);
            } else if ($data['status_sekarang'] === 'Pejantan'){
                $pejantan = Pejantan::create();
                $pejantan->ternak()->save($ternak);
            } 
            return back()->with('success', 'Data berhasil ditambahkan');
        } catch (\Exception $e) {
            return back()->withErrors([
                'input' => 'Cannot input data',
            ]);
        }

        // return dd($data);
    }
    public function detail($id)
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

        $ternak = Ternak::find($id);
        if ($ternak === null){
            return redirect()->intended('/ternak')->withErrors([
                'detail' => 'ternak not found',
            ]);
        }
        if ($ternak->status_sekarang === 'Induk'){
            $riwayatKawin = RiwayatKawin::where('id_induk', $ternak->id);
            $idPartners = $riwayatKawin->pluck('id_pejantan')->toArray();
            $idKawins = $riwayatKawin->pluck('id');
        } else if ($ternak->status_sekarang === 'Pejantan'){
            $riwayatKawin = RiwayatKawin::where('id_pejantan', $ternak->id);
            $idPartners = $riwayatKawin->pluck('id_induk')->toArray();
            $idKawins = $riwayatKawin->pluck('id');
        }else{
            return view('ternak.detail', compact('ternak', 'list_ras'));
        }
        $RiwayatLahir = RiwayatLahir::whereIn('id_kawin', $idKawins);
        $tanggalLahirs = $RiwayatLahir->pluck('tanggal_lahir')->toArray();
        $idAnaks = Ternak::whereIn('id_anak', $RiwayatLahir->pluck('id_anak'))->pluck('id')->toArray();

        $RiwayatKeturunan =array_map(null, $idAnaks, $idPartners, $tanggalLahirs);

        // return dd($idAnaks,$idPartners,$tanggalLahirs);
        // return dd($RiwayatKeturunan);
        return view('ternak.detail', compact('ternak', 'list_ras', 'RiwayatKeturunan'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $ternaks = Ternak::where('nama_ternak', 'like', '%' . $query . '%')
            ->orWhere('ras', 'like', '%' . $query . '%')
            ->orWhere('jenis_kelamin', 'like', '%' . $query . '%')
            ->orWhere('rfid', 'like', '%' . $query . '%')
            ->get();

        return view('ternak.index', ['ternaks' => $ternaks]);
    }
}
