<?php

namespace App\Http\Controllers;

use App\Models\MhsElektro;
use Illuminate\Http\Request;

class MhsElektroController extends Controller
{
    public function index()
    {
        $mahasiswas = MhsElektro::all();

        return view('elektro.mahasiswa.data_mahasiswa', ['mahasiswas' => $mahasiswas]);
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
        $mahasiswa = new MhsElektro();
        $mahasiswa->nama_mhs = $request->nama_mhs;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->konsentrasi = $request->konsentrasi;
        $mahasiswa->save();

        return response()->json(['message' => 'Data mahasiswa berhasil disimpan'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(MhsElektro $mhsElektro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mahasiswa = MhsElektro::find($id);

        if ($mahasiswa) {
            return response()->json($mahasiswa);
        } else {
            return response()->json(null);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MhsElektro $mhsElektro)
    {
        $id = $request->input('id');
        $mahasiswa = MhsElektro::find($id);

        if (!$mahasiswa) {
            return response()->json(['status' => "gagal update data"]);
        }

        $mahasiswa->nama_mhs = $request->input('nama_mhs');
        $mahasiswa->nim = $request->input('nim');
        $mahasiswa->konsentrasi = $request->input('konsentrasi');
        $mahasiswa->save();

        return response()->json(['status' => "success"], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $mahasiswa = MhsElektro::findOrFail($id);

            $mahasiswa->delete();

            return response()->json(['message' => 'Data berhasil dihapus']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal menghapus data'], 500);
        }
    }
}
