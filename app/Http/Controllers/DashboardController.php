<?php

namespace App\Http\Controllers;

use App\Models\Kepangkatan;
use App\Models\Kinerja;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahPegawai = Pegawai::count();
        $kinerja = Kinerja::count();
        $pangkat = Kepangkatan::count();

        return view("dashboard.index", compact('jumlahPegawai', 'kinerja', 'pangkat'));
    }
}
