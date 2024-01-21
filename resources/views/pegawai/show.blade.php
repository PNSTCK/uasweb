@extends('layout.be.template')
@section('title', 'Data Guru')
@section('content')
    <link rel="stylesheet" href="/beckend/assets/css/bootstrap.min.css">
    <h3 class="text-center">
        Data Guru
    </h3>
    <hr class="mx-auto" style="width: 50%; border-top: 2px solid #0066ff;">
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <img src="/galery/{{ $row->image }}" class="rounded" width="300px" height="300px">
                        <hr>
                        <h4>{{ $pegawai->nama }}</h4>
                        <p class="tmt-3">
                            {!! $pegawai->pegawaii->nama_kepangkatan !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
