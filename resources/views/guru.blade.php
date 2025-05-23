@extends('layouts.front')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="background-image: url('user/img/background.jpg');background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 100%;
        min-height: 50vh;">
            <h3 class="display-3 font-weight-bold text-white">Guru Kami</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="{{ url('/') }}">Beranda</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Guru Kami</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Guru Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2 text-success">Guru</span>
                </p>
                <h1 class="mb-4" style="color: #2e7d32">Temui Guru Kami</h1>
            </div>
            <div class="row">
                @foreach ($karyawan as $data)
                    <div class="col-md-6 col-lg-3 text-center team mb-5">
                        <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                            <img src="{{ asset('storage/karyawan/' . $data->foto) }}" alt=""
                                class="img-fluid w-100 p-2 bg-secondary">
                        </div>
                        <h4 class="text-success">{{ $data->nama }}</h4>
                        <i>{{ $data->jabatan }}</i>
                        <p>{{ $data->tugas }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Guru End -->
@endsection
