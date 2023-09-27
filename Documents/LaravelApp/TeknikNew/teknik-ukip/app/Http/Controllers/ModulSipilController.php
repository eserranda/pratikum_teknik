<?php

namespace App\Http\Controllers;

use App\Models\ModulSipil;
use Illuminate\Http\Request;

class ModulSipilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modulSipil = ModulSipil::all();

        return view('sipil.modul.data', ['modulSipil' => $modulSipil]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function download($id)
    {
        $modul = ModulSipil::find($id);

        if ($modul) {
            $filePath = storage_path('app/public/' . $modul->nama_file);

            if (file_exists($filePath)) {
                return response()->file($filePath);
            }
        }

        return redirect()->back()->with('error', 'File tidak ditemukan.');
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

        $modul = new ModulSipil();
        $modul->nama = $namaModul;
        $modul->nama_file = $fileModulPath;
        $modul->save();

        return response()->json(['message' => 'success'], 200);
    }




    // public function store(Request $request)
    // {
    //     $fileModul = $request->file('file_modul');
    //     $namaFile = $fileModul->getClientOriginalName();
    //     $fileModul->storeAs('public/modul_praktikum', $namaFile);

    //     $modul = new ModulSipil([
    //         'nama' => $request->input('nama_modul'),
    //         'nama_file' => $namaFile,
    //     ]);
    //     $modul->save();

    //     return response()->json(['message' => 'Data berhasil diupload']);
    // }

    /**
     * Display the specified resource.
     */
    public function show(ModulSipil $modulSipil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ModulSipil $modulSipil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ModulSipil $modulSipil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModulSipil $modulSipil)
    {
        //
    }
}
