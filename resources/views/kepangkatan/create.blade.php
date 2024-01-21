@extends('layout.be.template')
@section('title', 'Tambah Kepangkatan/')
@section('content')

    <div class="container px-1 mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center; color: black">Tambah Kepangkatan
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

                        <form action="{{ route('kepangkatan.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">Nama Kepangkatan</label>
                                <input type="text" name="nama_kepangkatan" class="form-control" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="">Jabatan</label>
                                <input type="text" name="nama_kepangkatan" class="form-control" >
                            </div>
                            <input type="submit" value="Simpan" class="btn btn-success">
                            <a href="{{ route('kepangkatan.index') }}" class="btn btn-danger">Batal</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
