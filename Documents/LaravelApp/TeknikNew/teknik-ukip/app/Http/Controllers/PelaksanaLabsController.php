<?php

namespace App\Http\Controllers;

use App\Models\PelaksanaLabs;
use Illuminate\Http\Request;

class PelaksanaLabsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelaksana_labs = PelaksanaLabs::all();

        return view('sipil.pelaksana_labs.data', ['pelaksana_labs' => $pelaksana_labs]);
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
        $pelaksanaLabs = new PelaksanaLabs();
        $pelaksanaLabs->labs = $request->labs;
        $pelaksanaLabs->praktikum = $request->praktikum;
        $pelaksanaLabs->pengelola_labs = $request->pengelola_labs;
        $pelaksanaLabs->pelaksana_labs = $request->pelaksana_labs;
        $pelaksanaLabs->save();

        return response()->json(['message' => 'Data Alat Lab. berhasil disimpan'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(PelaksanaLabs $pelaksanaLabs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PelaksanaLabs $pelaksanaLabs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PelaksanaLabs $pelaksanaLabs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $daftarAlat = PelaksanaLabs::findOrFail($id);

            $daftarAlat->delete();

            return response()->json(['message' => 'Data berhasil dihapus']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal menghapus data'], 500);
        }
    }
}
