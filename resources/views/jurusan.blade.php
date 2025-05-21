@extends('layouts.front')
@section('content')
    <div class="container-fluid bg-success mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Jurusan</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="{{ url('/') }}">Beranda</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Jurusan</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Jurusan Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2 text-success">Kelas Terpopuler</span>
                </p>
                <h1 class="mb-4" style="color: #2e7d32">Jurusan</h1>
            </div>
            <div class="row p-5">
                @foreach ($jurusan as $data)
                    <div class="col-lg-6 mb-5">
                        <div class="card border-0 bg-light shadow-sm pb-2 mb-5">
                            <img src="{{ asset('storage/jurusan/' . $data->foto) }}" alt=""
                                style="width:500px; height: 500px;">
                            <div class="card-body text-center">
                                <h4 class="card-title text-success" style="color: #2e7d32">{{ $data->nama_jurusan }}</h4>
                                <p class="card-text">
                                    {{ Str::limit($data->deskripsi, 200) }}
                                </p>
                                <a href="{{route('jurusand', $data->id)}}" class="btn btn-success px-4 mx-auto my-2">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    <!-- Jurusan End -->
@endsection
