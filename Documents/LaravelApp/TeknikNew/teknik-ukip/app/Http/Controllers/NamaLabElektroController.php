<?php

namespace App\Http\Controllers;

use App\Models\NamaLabElektro;
use Illuminate\Http\Request;

class NamaLabElektroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nama_labs = NamaLabElektro::all();

        return view('elektro.nama_labs.data', ['nama_labs' => $nama_labs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function get_name_labs()
    {
        $namaLabs = NamaLabElektro::all();
        return response()->json($namaLabs);
    }


    public function store(Request $request)
    {
        $labs = new NamaLabElektro();
        $labs->nama = $request->nama_labs;
        $labs->save();

        return response()->json(['message' => 'Data mahasiswa berhasil disimpan'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(NamaLabElektro $namaLabElektro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NamaLabElektro $namaLabElektro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NamaLabElektro $namaLabElektro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $namaLabs = NamaLabElektro::findOrFail($id);

            $namaLabs->delete();

            return response()->json(['message' => 'Data berhasil dihapus']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal menghapus data'], 500);
        }
    }
}