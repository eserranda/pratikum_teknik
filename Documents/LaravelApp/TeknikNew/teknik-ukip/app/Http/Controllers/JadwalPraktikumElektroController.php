<?php

namespace App\Http\Controllers;

use App\Models\JadwalPraktikumElektro;
use Illuminate\Http\Request;

class JadwalPraktikumElektroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $praktikum = JadwalPraktikumElektro::all();

        return view('elektro.praktikum.data', ['praktikum' => $praktikum]);
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
        $jadwal = new JadwalPraktikumElektro();
        $jadwal->kode_mk = $request->kode_mk;
        $jadwal->praktikum = $request->praktikum;
        $jadwal->sks = $request->sks;
        $jadwal->konsentrasi = $request->konsentrasi;
        $jadwal->semester = $request->semester;
        $jadwal->dosen = $request->dosen;
        $jadwal->save();

        return response()->json(['message' => 'Data mahasiswa berhasil disimpan'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(JadwalPraktikumElektro $jadwalPraktikumElektro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JadwalPraktikumElektro $jadwalPraktikumElektro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JadwalPraktikumElektro $jadwalPraktikumElektro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $mahasiswa = JadwalPraktikumElektro::findOrFail($id);

            $mahasiswa->delete();

            return response()->json(['message' => 'Data berhasil dihapus']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal menghapus data'], 500);
        }
    }
}
