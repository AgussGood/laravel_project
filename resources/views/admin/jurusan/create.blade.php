@extends('layouts.admin')
@section('content')

    <body>
        <div class="container-fluid position-relative d-flex p-0">
            <div class="col-sm-12 col-xl-11 m-5">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Jurusan</h6>
                    <form action="{{ Route('jurusan.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Jurusan</label>
                            <input type="text" class="form-control @error('nama_jurusan') is-invalid @enderror"
                                id="" aria-describedby="" name="nama_jurusan">
                            @error('nama_jurusan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <label for="" class="form-label">Deskripsi</label>
                        <div class="form-floating mb-3">
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" placeholder="Leave a comment here" id="floatingTextarea"
                                style="height: 150px;" ></textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Foto</label>
                            <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                id="" aria-describedby="" name="foto">
                             @error('foto')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
