<?php

namespace App\Http\Controllers;

use App\Models\MhsSipil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MhsSipilController extends Controller
{
    public function index()
    {
        $mahasiswas = MhsSipil::all();

        return view('sipil.mahasiswa.data_mahasiswa', ['mahasiswas' => $mahasiswas]);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'nama_mhs' => 'required',
        //     'nim' => 'required|unique:mhs_sipil,nim',
        // ]);

        $mahasiswa = new MhsSipil;
        $mahasiswa->nama_mhs = $request->nama_mhs;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->save();

        return response()->json(['message' => 'Data mahasiswa berhasil disimpan'], 200);
    }


    /**
     * Display the specified resource.
     */
    public function show(MhsSipil $mhsSipil)
    {
        //
    }


    public function edit($id)
    {
        $mahasiswa = MhsSipil::find($id);

        if ($mahasiswa) {
            return response()->json($mahasiswa);
        } else {
            return response()->json(null);
        }
    }


    public function update(Request $request)
    {
        $id = $request->input('id');
        $mahasiswa = MhsSipil::find($id);

        if (!$mahasiswa) {
            return response()->json(['status' => "gagal update data"]);
        }

        $mahasiswa->nama_mhs = $request->input('nama_mhs');
        $mahasiswa->nim = $request->input('nim');
        $mahasiswa->save();

        return response()->json(['status' => "success"], 200);
    }



    public function destroy($id)
    {
        try {
            $mahasiswa = MhsSipil::findOrFail($id);

            $mahasiswa->delete();

            return response()->json(['message' => 'Data berhasil dihapus']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal menghapus data'], 500);
        }
    }
}
