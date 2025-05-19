@extends('layouts.admin')
@section('content')

    <body>
        <div class="container-fluid position-relative d-flex p-0">
            <div class="col-sm-12 col-xl-11 m-5">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Industri</h6>
                    <form action="{{ Route('industri.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Industri</label>
                            <input type="text" class="form-control  @error('nama_industri') is-invalid @enderror"
                                id="" aria-describedby="" name="nama_industri">
                            @error('nama_industri')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Id Jurusan</label>
                            <select class="form-control  @error('id_jurusan') is-invalid @enderror" name="id_jurusan"
                                id="">
                                @foreach ($jurusan as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_jurusan }}</option>
                                @endforeach
                            </select>
                            @error('id_jurusan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div> <br>
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
