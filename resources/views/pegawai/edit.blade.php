@extends('layout.be.template')
@section('title', 'Edit Pegawai/')
@section('content')

    <div class="container px-1 mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center; color: black">Edit Pegawai</div>
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Error!</strong> <br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('pegawai.update', $pegawai->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label>Gambar</label>
                                <input type="file" name="image" class="form-control">
                                <img src="/images/{{ $pegawai->image }}" width="300px">
                            </div>
                            <div class="mb-3">
                                <label>Nip</label>
                                <input type="number" name="nip" class="form-control" value="{{ $pegawai->nip }}">
                            </div>
                            <div class="mb-3">
                                <label for="">Nama Pegawai</label>
                                <input type="text" name="nama" class="form-control" value="{{ $pegawai->nama }}">
                            </div>
                            <div class="mb-3">
                                <label for="">Jenis Kelamin</label>
                                <select name="jk" class="form-select">
                                    <option disabled value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="L" {{ $pegawai->jk == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="P" {{ $pegawai->jk == 'P' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="{{ $pegawai->alamat }}">
                            </div>
                            <div class="mb-3">
                                <label for="">kota</label>
                                <input type="text" name="kota" class="form-control" value="{{ $pegawai->kota }}">
                            </div>
                            <div class="mb-3">
                                <label for="">pangkat</label>
                                <select name="nama_pangkat" id="" class="form-select">
                                    <option disabled value="">-- Pilih pangkat --</option>
                                    @foreach ($data_pegawai as $row)
                                        <option value="{{ $row->id }}"
                                            {{ $pegawai->pegawaii->id == $row->id ? 'selected' : '' }}>
                                            {{ $row->nama_kepangkatan }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="submit" value="Simpan" class="btn btn-success">
                            <a href="{{ route('pegawai.index') }}" class="btn btn-warning">Batal</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
