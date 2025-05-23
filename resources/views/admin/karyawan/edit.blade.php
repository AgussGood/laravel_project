@extends('layouts.admin')
@section('content')

    <body>
        <div class="container-fluid position-relative d-flex p-0">
            <div class="col-sm-12 col-xl-11 m-5">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Karyawan</h6>
                    <form action="{{ Route('karyawan.update', $karyawan->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id=""
                                aria-describedby="" name="nama" value="{{ $karyawan->nama }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="col-sm-10">
                                <label>Jenis Kelamin </label><br><br>
                                <div class="form-check">
                                    <input class="form-check-input  @error('jenis_kelamin') is-invalid @enderror"
                                        type="radio" name="jenis_kelamin" id="gridRadios1" value="Laki-Laki"
                                        @if ($karyawan->jenis_kelamin == 'Laki-Laki') checked @endif>
                                    @error('jenis_kelamin')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <label class="form-check-label" for="gridRadios1">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror"
                                        type="radio" name="jenis_kelamin" id="gridRadios2" value="Perempuan"
                                        @if ($karyawan->jenis_kelamin == 'Perempuan') checked @endif>
                                    @error('jenis_kelamin')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <label class="form-check-label" for="gridRadios2">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                         <label for="floatingTextarea">Tugas</label>
                        <div class="form-floating mb-3">
                            <textarea class="form-control @error('tugas') is-invalid @enderror" name="tugas" rows="4" style="height: 150px;"> {{ $karyawan->tugas }} </textarea>
                                @error('tugas')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Jabatan</label>
                             <select  class="form-select mb-3 @error('jabatan') is-invalid @enderror" aria-label="Default select example" name="jabatan">
                                <option value="Guru" {{ $karyawan->jabatan == "Guru" ? 'selected' : ''}}>Guru</option>
                                <option value="Staf"  {{ $karyawan->jabatan == "Staf" ? 'selected' : ''}}>Staf</option>
                                <option value="Tata Usaha"  {{ $karyawan->jabatan == "Tata Usaha" ? 'selected' : ''}}>Tata Usaha</option>
                                <option value="Bimbingan Konseling"  {{ $karyawan->jabatan == "Bimbingan Konseling" ? 'selected' : ''}}>Bimbingan Konseling</option>
                                <option value="Wakil Kepala Sekolah"  {{ $karyawan->jabatan == "Wakil Kepala Sekolah" ? 'selected' : ''}}>Wakil Kepala Sekolah</option>
                                <option value="Kepala Sekolah"  {{ $karyawan->jabatan == "Kepala Sekolah" ? 'selected' : ''}}>Kepala Sekolah</option>
                            </select>
                             @error('jabatan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">foto</label> <br>
                            <img src="{{ asset('storage/karyawan/' . $karyawan->foto) }}" alt=""
                                style="width:100px; height: 100px;"><br><br>
                            <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
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
