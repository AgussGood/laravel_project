@extends('layouts.admin')
@section('content')

    <body>
        <div class="col-sm-12 col-xl-11 m-5">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Eskul</h6>
                <form action="{{ Route('eskul.update', $eskul->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Eskul</label>
                        <input type="text" class="form-control @error('nama_eskul') is-invalid @enderror" id=""
                            aria-describedby="" name="nama_eskul" value="{{ $eskul->nama_eskul }}">
                        @error('nama_eskul')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Foto</label> <br>
                        <img src="{{ asset('storage/eskul/' . $eskul->foto) }}" alt=""
                            style="width:100px; height: 100px;"><br><br>
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
                        @error('foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
            </div>
            </form>
        </div>
        </div>
        </div>
    </body>

    </html>
@endsection
