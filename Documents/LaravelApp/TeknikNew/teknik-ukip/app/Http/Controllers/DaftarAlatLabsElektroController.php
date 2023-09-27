<?php

namespace App\Http\Controllers;

use App\Models\DaftarAlatLabsElektro;
use Illuminate\Http\Request;

class DaftarAlatLabsElektroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $daftar_alat = DaftarAlatLabsElektro::all();

        return view('elektro.laboratorium.data', ['daftar_alat' => $daftar_alat]);
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
        $percobaan = new DaftarAlatLabsElektro();
        $percobaan->nama_alat = $request->nama_alat;
        $percobaan->laboratorium = $request->laboratorium;
        $percobaan->percobaan = $request->percobaan;
        $percobaan->nomor_id = $request->nomor_id;
        $percobaan->tipe = $request->tipe;
        $percobaan->jumlah = $request->jumlah;
        $percobaan->satuan = $request->satuan;
        $percobaan->save();

        return response()->json(['message' => 'Data mahasiswa berhasil disimpan'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(DaftarAlatLabsElektro $daftarAlatLabsElektro)
    {
        //
    }


    public function edit(DaftarAlatLabsElektro $daftarAlatLabsElektro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DaftarAlatLabsElektro $daftarAlatLabsElektro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $namaLabs = DaftarAlatLabsElektro::findOrFail($id);

            $namaLabs->delete();

            return response()->json(['message' => 'Data berhasil dihapus']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal menghapus data'], 500);
        }
    }
}
