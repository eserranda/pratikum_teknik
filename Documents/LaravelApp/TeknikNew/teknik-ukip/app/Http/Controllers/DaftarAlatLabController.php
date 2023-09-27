<?php

namespace App\Http\Controllers;

use App\Models\DaftarAlatLab;
use Illuminate\Http\Request;

class DaftarAlatLabController extends Controller
{

    public function index()
    {
        $daftar_alat = DaftarAlatLab::all();

        return view('sipil.laboratorium.data', ['daftar_alat' => $daftar_alat]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $daftar_alat = new DaftarAlatLab();
        $daftar_alat->nama_alat = $request->nama_alat;
        $daftar_alat->nama_labs = $request->nama_labs;
        $daftar_alat->jumlah = $request->jumlah;
        $daftar_alat->satuan = $request->satuan;
        $daftar_alat->save();

        return response()->json(['message' => 'Data Alat Lab. berhasil disimpan'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(DaftarAlatLab $daftarAlatLab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DaftarAlatLab $daftarAlatLab)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DaftarAlatLab $daftarAlatLab)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $daftarAlat = DaftarAlatLab::findOrFail($id);

            $daftarAlat->delete();

            return response()->json(['message' => 'Data berhasil dihapus']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal menghapus data'], 500);
        }
    }
}