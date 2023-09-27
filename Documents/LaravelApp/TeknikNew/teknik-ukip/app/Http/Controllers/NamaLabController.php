<?php

namespace App\Http\Controllers;

use App\Models\NamaLab;
use Illuminate\Http\Request;

class NamaLabController extends Controller
{

    public function index()
    {
        $nama_labs = NamaLab::all();

        return view('sipil.nama_labs.data', ['nama_labs' => $nama_labs]);
    }

    public function get_name_labs()
    {
        $namaLabs = NamaLab::all();
        return response()->json($namaLabs);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $labs = new NamaLab();
        $labs->nama = $request->nama_labs;
        $labs->save();

        return response()->json(['message' => 'Data mahasiswa berhasil disimpan'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(NamaLab $namaLab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NamaLab $namaLab)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NamaLab $namaLab)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $mahasiswa = NamaLab::findOrFail($id);

            $mahasiswa->delete();

            return response()->json(['message' => 'Data berhasil dihapus']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal menghapus data'], 500);
        }
    }
}
