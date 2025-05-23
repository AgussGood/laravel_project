@extends('layouts.admin')
@section('content')

    <body>
        <div class="container-fluid position-relative d-flex p-0">
            <div class="col-sm-12 col-xl-11 m-5">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">karyawan</h6>
                    <form action="{{ Route('karyawan.update', $karyawan->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="" class="form-label">Nama</label>
                            <input type="text" class="form-control text-dark" id="" aria-describedby=""
                                name="nama" value="{{ $karyawan->nama }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Jenis Kelamin</label>
                            <input type="text" class="form-control text-dark" id="" aria-describedby="emailHelp"
                                name="jenis_kelamin" value="{{ $karyawan->jenis_kelamin }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tugas</label>
                            <input type="text" class="form-control text-dark" id="" aria-describedby="emailHelp"
                                name="tugas" value="{{ $karyawan->tugas }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Jabatan</label>
                            <input type="text" class="form-control text-dark" id="" aria-describedby="emailHelp"
                                name="jabatan" value="{{ $karyawan->jabatan }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Foto</label><br>
                            <img src="{{ asset('storage/karyawan/' . $karyawan->foto) }}" alt=""
                                style="width:200px; height: 210px;">
                        </div>
                        <a href="{{ route('karyawan.index') }}" class="btn btn-sm btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
