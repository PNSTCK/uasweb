<?php

namespace App\Http\Controllers;

use App\Models\Kepangkatan;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data = Pegawai::where('nama', 'like', '%' . $request->cari . '%')->get();
        } else {
            $data = Pegawai::with('pekerja')->orderBy('nama', 'asc')->get();
        }
        return view("pegawai.index", compact("data", "request"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_pegawaii = Kepangkatan::all();
        return view("pegawai.create", compact('data_pegawaii'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "image" => "required|image|mimes:jpeg,png,jpg",
            "nip" => "required|unique:pegawaies",
            "nama" => "required|unique:pegawaies",
            "jk" => "required",
            "alamat" => "required",
            "kota" => "required",
            "nama_pangkat" => "required",
        ]);

        $input = $request->all();

        //upload gambar
        if ($image = $request->file('image')) {
            $destinationPath = 'images_pegawai/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = "$postImage";
        }


        Pegawai::create($input);
        return redirect()->route("pegawai.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        if ($request->has('cari')) {
            $data = Pegawai::where('nama', 'like', '%' . $request->cari . '%')->get();
        } else {
            $data = Pegawai::orderBy('nama', 'asc')->get();
        }
        return view("halamanDataPegawai", compact("data", "request"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        $data_pegawai = Kepangkatan::all();
        return view("pegawai.edit", compact("pegawai", "data_pegawai"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
            "nip" => "required",
            "nama" => "required",
            "jk" => "required",
            "alamat" => "required",
            "kota" => "required",
            "nama_pangkat" => "required",
            "image" => "image|mimes:jpeg,png,jpg",
        ]);

        $input = $request->except('image');

        if ($request->hasFile('image')) {
            $destinationPath = 'images_pegawai/';

            // Hapus gambar lama jika ada
            if ($pegawai->image && file_exists($destinationPath . $pegawai->image)) {
                unlink($destinationPath . $pegawai->image);
            }

            // Upload dan simpan gambar baru
            $image = $request->file('image');
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = $postImage;
        }

        $pegawai->update($input);
        return redirect()->route("pegawai.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        return to_route("pegawai.index")->with("success", "Data berhasil disimpan");
    }
}
