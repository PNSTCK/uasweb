@extends('layout.be.template')
@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="container-fluid px-4">
        <div class="row g-3 my-2">
            <div class="col-md-3">
                <div class="p-3 bg-primary shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2 text-white">{{ $jumlahPegawai }}</h3>
                        <p class="fs-5 text-white">Pegawai</p>
                    </div>
                    <i class="fa-solid fa-chalkboard-user" style="font-size: 50px; color: white"></i>
                </div>
            </div>

            <div class="col-md-3">
                <div class="p-3 bg-success shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2 text-white">{{ $kinerja }}</h3>
                        <p class="fs-5 text-white">Kinerja</p>
                    </div>
                    <i class="fa-solid fa-users" style="font-size: 50px; color: white"></i>
                </div>
            </div>

            <div class="col-md-3">
                <div class="p-3 bg-warning shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2 text-white">{{ $pangkat }}</h3>
                        <p class="fs-5 text-white">Pangkat</p>
                    </div>
                    <i class="fa-regular fa-file" style="font-size: 50px; color: white"></i>
                </div>
            </div>

        <section class="section dashboard" style="margin-top: 50px ">
            Selamat Datang I Kadek Rio Febriyan
        </section>
    @endsection
