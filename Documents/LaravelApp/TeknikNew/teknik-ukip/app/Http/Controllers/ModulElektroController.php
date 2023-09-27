<?php

namespace App\Http\Controllers;

use App\Models\ModulElektro;
use Illuminate\Http\Request;

class ModulElektroController extends Controller
{
    public function index()
    {
        $modulelektro = ModulElektro::all();

        return view('elektro.modul.data', ['modulelektro' => $modulelektro]);
    }

    public function download($id)
    {
        $modul = ModulElektro::find($id);

        if ($modul) {
            $filePath = storage_path('app/public/' . $modul->nama_file);

            if (file_exists($filePath)) {
                return response()->file($filePath);
            }
        }

        return redirect()->back()->with('error', 'File tidak ditemukan.');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_modul' => 'required|string|max:255',
            'file_modul' => 'required|file|mimes:zip,doc,docx,xls,xlsx|max:2048',
        ]);

        // Mengambil data dari request
        $namaModul = $request->input('nama_modul');
        $fileModul = $request->file('file_modul');

        // Simpan file yang diupload ke direktori yang diinginkan
        $fileModulPath = $fileModul->store('modul_praktikum', 'public');

        $modul = new ModulElektro();
        $modul->nama = $namaModul;
        $modul->nama_file = $fileModulPath;
        $modul->save();

        return response()->json(['message' => 'success'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(ModulElektro $modulElektro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ModulElektro $modulElektro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ModulElektro $modulElektro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModulElektro $modulElektro)
    {
        //
    }
}
