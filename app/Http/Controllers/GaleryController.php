<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data = Galery::where('judul', 'like', '%' . $request->cari . '%')->get();
        } else {
            $data = Galery::orderBy('judul', 'asc')->get();
        }

        return view("galery.index", compact("data", "request"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("galery.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "image" => "required|image|mimes:jpeg,png,jpg",
            "judul" => "required|unique:galeries",
        ]);

        $input = $request->all();

        //upload gambar
        if ($image = $request->file('image')) {
            $destinationPath = 'galery/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = "$postImage";
        }


        Galery::create($input);
        return redirect()->route("galeri.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data = Galery::all();
        return view("halamanGallery", compact("data"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galery $galeri)
    {
        return view("galery.edit", compact("galeri"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galery $galeri)
    {
        $request->validate([
            "judul" => "required",
            "image" => "nullable|image|mimes:jpeg,png,jpg",
        ]);

        $input = $request->except('image');

        if ($request->hasFile('image')) {
            $destinationPath = 'galery/';

            // Hapus gambar lama jika ada
            if ($galeri->image && file_exists($destinationPath . $galeri->image)) {
                unlink($destinationPath . $galeri->image);
            }

            // Upload dan simpan gambar baru
            $image = $request->file('image');
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = $postImage;
        } else {
            // Jika tidak ada gambar baru diunggah, gunakan gambar lama
            $input['image'] = $galeri->image;
        }

        $galeri->update($input);
        return redirect()->route("galeri.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galery $galeri)
    {
        $galeri->delete();
        return to_route("galeri.index")->with("success", "Data berhasil disimpan");
    }
}
