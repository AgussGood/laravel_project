@extends('layouts.admin')
@section('content')

    <body>
        <div class="container-fluid position-relative d-flex p-0">
            <div class="col-sm-12 col-xl-11 m-5">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Prestasi</h6>
                    <form action="{{ Route('prestasi.update', $prestasi->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="" class="form-label">Tanggal Prestasi</label>
                            <input type="date" class="form-control text-dark" id="" aria-describedby=""
                                name="tgl_prestasi" value="{{ $prestasi->tgl_prestasi }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Prestasi</label>
                            <input type="text" class="form-control text-dark" id="" aria-describedby=""
                                name="nama_prestasi" value="{{ $prestasi->nama_prestasi }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tingkat</label>
                            <input type="text" class="form-control text-dark" id="" aria-describedby=""
                                name="tingkat" value="{{ $prestasi->tingkat }}" readonly>
                        </div>
                        <label for="floatingTextarea">Deskripsi</label>
                        <div class="form-floating mb-3">
                            <textarea class="form-control text-dark @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="4"
                                style="height: 150px;" readonly> {{ $prestasi->deskripsi }} </textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Foto</label><br>
                            <img src="{{ asset('storage/prestasi/' . $prestasi->foto) }}" alt=""
                                style="width:200px; height: 200px;">
                        </div>
                        <a href="{{ route('prestasi.index') }}" class="btn btn-sm btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
