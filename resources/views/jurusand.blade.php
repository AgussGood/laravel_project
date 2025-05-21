@extends('layouts.front')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-success mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Tentang Kami</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="{{ url('/') }}">Beranda</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Tentang Kami</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Detail Start -->
    <div class="container py-5">
        <div class="row pt-5">
            <div class="col-lg-10">
                <div class="d-flex flex-column text-left mb-3">
                    <p class="section-title pr-5">
                        <span class="pr-2 text-success">Halaman Detail Infromasi</span>
                    </p>
                    <h1 class="mb-3" style="color: #2e7d32">{{ $jurusan->nama_jurusan }}</h1>
                </div>
                <div class="mb-5">
                    <img class="img-fluid rounded mb-4" src="{{ asset('storage/jurusan/' . $jurusan->foto) }}"
                        alt="" style="width: 500px">
                    <p>
                        {{ $jurusan->deskripsi }}
                    </p>
                    <br>
                    @foreach ($industri as $data )
                    <div class="d-flex flex-column text-left mb-3">
                    <p class="section-title pr-5 lg-10">
                        <span class="pr-2 text-success">Bekerja Sama Dengan</span>
                    </p>
                    <h5 class="pr-2 text-success">{{ $data->nama_industri }}</h5>
                    <img class="img-fluid rounded mb-4" src="{{ asset('storage/industri/' . $data->foto) }}"
                        alt="" style="width: 200px">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->
@endsection
