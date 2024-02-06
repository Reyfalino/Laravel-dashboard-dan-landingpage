<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;

class pesertaController extends Controller
{
    public function index()
    {
        $pesertas = Peserta::all();
        return view('peserta.index', compact('pesertas'));
    }

    public function create()
    {
        return view('peserta.create');
    }

    public function buat (Request $request)
    {
        $validateData = $request->validate([
            'event_id' => 'string|required|min:4|max:4|unique:pesertas',
            'name' => 'string|required',
            'phone' => 'string|required|min:10|max:15',
            'address' => 'string|required',
            'email' => 'string|required'

        ]);

        $peserta = Peserta::create ($validateData);

        if($peserta){
            return to_route('peserta.index')->with('Succes', 'Berhasil Menambah Data');
        } else{
            return to_route('peserta.index')->with('Failed', 'Gagal Menambah Data');
        }
    }

    public function edit($id)
    {
        $peserta = Peserta::where('id', $id)->first();
        return view('peserta.edit', compact('peserta'));
    }
    
    public function update (Request $request, Peserta $peserta)
    {

        $validateData = $request->validate([
            'event_id' => 'string|required|min:4|max:4|unique:pesertas,event_id,' . $peserta->id,
            'name' => 'string|required',
            'phone' => 'string|required|min:10|max:15',
            'address' => 'string|required',
            'email' => 'string|required'

        ]);

        $peserta->update($validateData);

        if($peserta){
            return to_route('peserta.index')->with('Succes', 'Berhasil Mengupdate Data');
        } else{
            return to_route('peserta.index')->with('Failed', 'Gagal Mengupdate Data');
        }

    }

    public function hapus(Peserta $peserta){

        $peserta->delete();

        if($peserta){
            return to_route('peserta.index')->with('Succes', 'Berhasil Menghapus Data');
        } else{
            return to_route('peserta.index')->with('Failed', 'Gagal Menghapus Data');
        }

    }
}
