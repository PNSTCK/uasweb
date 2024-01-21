@extends('layout.be.template')
@section('title', 'Edit Kepangkatan/')
@section('content')

    <div class="container px-1 mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center; color: black">Edit Kepangkatan
                    </div>
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('kepangkatan.update', $kepangkatan->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label>Nama Kepangkatan</label>
                                <input type="text" name="nama_kepangkatan" class="form-control"
                                    value="{{ $kepangkatan->nama_kepangkatan }}">
                            </div>
                            <div class="mb-3">
                                <label>Jabatan</label>
                                <input type="text" name="jabatan" class="form-control"
                                    value="{{ $kepangkatan->jabatan }}">
                            </div>
                            <input type="submit" value="Simpan" class="btn btn-success">
                            <a href="{{ route('kepangkatan.index') }}" class="btn btn-warning">Batal</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
