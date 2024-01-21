<?php

namespace App\Http\Controllers;

use App\Models\Kepangkatan;
use App\Models\Kinerja;
use Illuminate\Http\Request;

class KinerjaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data = Kinerja::where('nama_siswa', 'like', '%' . $request->cari . '%')->get();
        } else {
            $data = Kinerja::with('kinerjaa')->orderBy('jabatan', 'asc')->get();
        }

        return view("kinerja.index", compact("data", "request"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_kinerja = Kepangkatan::all();
        return view("kinerja.create", compact('data_kinerja'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "bulan" => "required",
            "tahun" => "required",
            "jabatan" => "required",
            "bobot_nilai" => "required",
            "keterangan" => "required",

        ]);

        Kinerja::create($request->all());
        return redirect()->route("kinerja.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Kinerja $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kinerja $kinerja)
    {
        $data_kinerja = Kinerja::all();
        return view("kinerja.edit", compact("kinerja", 'data_kinerja'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kinerja $kinerja)
    {
        $request->validate([
            "bulan" => "required",
            "tahun" => "required",
            "jabatan" => "required",
            "bobot_nilai" => "required",
            "keterangan" => "required",
        ]);
        $kinerja->update($request->all());
        return to_route("kinerja.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kinerja $kinerja)
    {
        $kinerja->delete();
        return to_route("kinerja.index")->with("success", "Data berhasil disimpan");
    }
}
