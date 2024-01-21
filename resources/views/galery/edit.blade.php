@extends('layout.be.template')
@section('title', 'Edit Galery/')
@section('content')

    <div class="container px-1 mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center; color: black">Edit Galery</div>
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

                        <form action="{{ route('galeri.update', $galeri->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label>Gambar</label>
                                <input type="file" name="image" class="form-control">
                                <img src="/galery/{{ $galeri->image }}" width="300px">
                            </div>
                            <div class="mb-3">
                                <label for="">Judul</label>
                                <input type="text" name="judul" class="form-control" value="{{ $galeri->judul }}">
                            </div>
                            <input type="submit" value="Simpan" class="btn btn-success">
                            <a href="{{ route('galeri.index') }}" class="btn btn-warning">Batal</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
