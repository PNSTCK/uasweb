<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\Kepangkatan;
use App\Models\Kinerja;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function index()
    {
        $jumlahPegawai = Pegawai::count();
        $kinerja = Kinerja::count();
        $pangkat = Kepangkatan::count();
        $data = Galery::all();

        return view("halaman.index",compact('jumlahPegawai', 'kinerja', 'pangkat','data'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
