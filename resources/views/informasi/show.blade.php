@extends('layouts.admin')
@section('content')

    <body>
        <div class="container-fluid position-relative d-flex p-0">
            <div class="col-sm-12 col-xl-11 m-5">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Informasi</h6>
                    <form action="{{ Route('informasi.update', $informasi->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control text-dark" id="" aria-describedby="" name="judul"
                                value="{{ $informasi->judul }}" readonly>
                        </div>
                        <div class="form-floating mb-3">
                            <label for="floatingTextarea">Deskripsi</label>
                            <textarea class="form-control text-dark @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="4"
                                style="height: 150px;" readonly> {{ $informasi->deskripsi }} </textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Foto</label><br>
                            <img src="{{ asset('storage/informasi/' . $informasi->foto) }}" alt=""
                                style="width:200px; height: 200px;">
                        </div>
                        <button type="submit" class="btn btn-primary">kembali</button>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
