<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggota = Anggota::all();

        return view('anggota.index', compact ('anggota'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $request -> file('foto');
        $image -> storeAs('public/anggota', $image -> hashName());

        Anggota::create([
            'kode' => $request -> kode,
            'nama' => $request -> nama,
            'jenis_kelamin' => $request -> jenis_kelamin,
            'tempat_lahir' => $request -> tempat_lahir,
            'tanggal_lahir' => $request -> tanggal_lahir,
            'telpon' => $request -> telpon,
            'alamat' => $request -> alamat,
            'foto' => $image ->hashName(),
        ]);
        

        return redirect('anggota')->with ('sukses', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Anggota $anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $anggota = Anggota::find($id);

        return view('anggota.edit', compact ('anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    $anggota = Anggota::findOrFail($id);

        if($request->hasFile('foto')) {
            $image = $request -> file('foto');
            $image -> storeAs('public/anggota', $image -> hashName());
    
            $anggota->update([
                'kode' => $request -> kode,
                'nama' => $request -> nama,
                'jenis_kelamin' => $request -> jenis_kelamin,
                'tempat_lahir' => $request -> tempat_lahir,
                'tanggal_lahir' => $request -> tanggal_lahir,
                'telpon' => $request -> telpon,
                'alamat' => $request -> alamat,
                'foto' => $image ->hashName(),
            ]);
        } else {
        $anggota->update([
            'kode' => $request -> kode,
            'nama' => $request -> nama,
            'jenis_kelamin' => $request -> jenis_kelamin,
            'tempat_lahir' => $request -> tempat_lahir,
            'tanggal_lahir' => $request -> tanggal_lahir,
            'telpon' => $request -> telpon,
            'alamat' => $request -> alamat,
        ]);
    }

        return redirect('anggota')->with ('sukses', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $anggota = Anggota::find($id);
        $anggota -> delete();

        return redirect('anggota')->with ('sukses', 'Data berhasil dihapus');
    }
}
