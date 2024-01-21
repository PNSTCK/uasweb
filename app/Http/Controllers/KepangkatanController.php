<?php

namespace App\Http\Controllers;

use App\Models\Kepangkatan;
use App\Models\Kinerja;
use Illuminate\Http\Request;

class KepangkatanController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data = Kepangkatan::where('nama_kepangkatan', 'like', '%' . $request->cari . '%')->get();
        } else {
            $data = Kepangkatan::with('jabatann')->orderBy('jabatan', 'asc')->get();
        }

        return view("kepangkatan.index", compact("data", "request"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_kepangkatan = Kinerja::all();
        return view("kepangkatan.create", compact('data_kepangkatan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nama_kepangkatan" => "required",
            "jabatan" => "required",
        ]);

        Kepangkatan::create($request->all());
        return redirect()->route("kepangkatan.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Kepangkatan $kepangkatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kepangkatan $kepangkatan)
    {
        $data_jabatan = Kinerja::all();
        return view("kepangkatan.edit", compact("kepangkatan", "data_jabatan"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kepangkatan $kepangkatan)
    {
        $request->validate([

            "jabatan" => "required",
        ]);
        $kepangkatan->update($request->all());
        return to_route("kepangkatan.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kepangkatan $kepangkatan)
    {
        $kepangkatan->delete();
        return to_route("kepangkatan.index")->with("success", "Data berhasil disimpan");
    }
}
