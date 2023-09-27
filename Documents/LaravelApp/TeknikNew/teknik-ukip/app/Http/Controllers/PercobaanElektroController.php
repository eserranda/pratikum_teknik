<?php

namespace App\Http\Controllers;

use App\Models\PercobaanElektro;
use Illuminate\Http\Request;

class PercobaanElektroController extends Controller
{

    public function index()
    {
        $nama_percobaan = PercobaanElektro::all();

        return view('elektro.percobaan.data', ['nama_percobaan' => $nama_percobaan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function get_name_percobaan()
    {
        $namaPercobaan = PercobaanElektro::all();
        return response()->json($namaPercobaan);
    }

    public function store(Request $request)
    {
        $percobaan = new PercobaanElektro();
        $percobaan->nama = $request->nama;
        $percobaan->save();

        return response()->json(['message' => 'Data mahasiswa berhasil disimpan'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(PercobaanElektro $percobaanElektro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PercobaanElektro $percobaanElektro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PercobaanElektro $percobaanElektro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $namaLabs = PercobaanElektro::findOrFail($id);

            $namaLabs->delete();

            return response()->json(['message' => 'Data berhasil dihapus']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal menghapus data'], 500);
        }
    }
}
