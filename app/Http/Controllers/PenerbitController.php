<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penerbit = Penerbit::all();

        return view('penerbit.index', compact ('penerbit'));
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
        $penerbit = new Penerbit;
        $penerbit -> kode = $request -> kode;
        $penerbit -> nama = $request -> nama;
        $penerbit -> save();

        return redirect('penerbit')->with ('sukses', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penerbit $penerbit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $penerbit = Penerbit::find($id);

        return view('penerbit.edit',compact ('penerbit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $penerbit = Penerbit::find($id);
        $penerbit -> kode = $request -> kode;
        $penerbit -> nama = $request -> nama;
        $penerbit -> update();

        return redirect('penerbit')->with ('sukses', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $penerbit = Penerbit::find($id);
        $penerbit -> delete();

        return redirect('penerbit')->with ('sukses', 'Data berhasil dihapus');
    }
}
