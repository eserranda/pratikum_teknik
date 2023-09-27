<?php

namespace App\Http\Controllers;

use App\Models\JadwalPraktikumSipil;
use Illuminate\Http\Request;

class JadwalPraktikumSipilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $praktikum = JadwalPraktikumSipil::all();

        return view('sipil.praktikum.data', ['praktikum' => $praktikum]);
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
        $jadwal = new JadwalPraktikumSipil();
        $jadwal->tanggal = $request->tanggal;
        $jadwal->labs = $request->labs;
        $jadwal->praktikum = $request->praktikum;
        $jadwal->dosen = $request->dosen;
        $jadwal->save();

        return response()->json(['message' => 'Data mahasiswa berhasil disimpan'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(JadwalPraktikumSipil $jadwalPraktikumSipil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JadwalPraktikumSipil $jadwalPraktikumSipil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JadwalPraktikumSipil $jadwalPraktikumSipil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $mahasiswa = JadwalPraktikumSipil::findOrFail($id);

            $mahasiswa->delete();

            return response()->json(['message' => 'Data berhasil dihapus']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal menghapus data'], 500);
        }
    }
}
