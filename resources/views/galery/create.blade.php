@extends('layout.be.template')
@section('title', 'Tambah Galery/')
@section('content')

    <div class="container px-1 mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center; color: black">Tambah Galery</div>
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

                        <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="image">Gambar</label>
                                <input type="file" name="image" class="form-control" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="">Judul</label>
                                <input type="text" name="judul" class="form-control">
                            </div>
                            <input type="submit" value="Simpan" class="btn btn-success">
                            <a href="{{ route('galeri.index') }}" class="btn btn-danger">Batal</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
