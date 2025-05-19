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
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="" aria-describedby="" name="judul"
                                value="{{ $informasi->judul }}">
                            @error('judul')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                         <label for="floatingTextarea">Deskripsi</label>
                        <div class="form-floating mb-3">
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="4" style="height: 150px;"> {{ $informasi->deskripsi }} </textarea>
                                @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Foto</label> <br>
                            <img src="{{ asset('storage/informasi/' . $informasi->foto) }}" alt=""
                                style="width:100px; height: 100px;"><br><br>
                            <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                name="foto">
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