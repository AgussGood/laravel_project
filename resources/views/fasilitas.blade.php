@extends('layouts.front')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="background-image: url('user/img/background.jpg');background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 100%;
        min-height: 50vh;">
            <h3 class="display-3 font-weight-bold text-white">Fasilitas</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="{{ url('/') }}">Beranda</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Fasilitas</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Fasilitas Start -->
    <div class="text-center pb-2">
        <p class="section-title px-5">
            <span class="px-2 text-success">Fasilitas</span>
        </p>
        <h1 class="mb-4" style="color: #2e7d32">Fasilitas Sekolah</h1>
    </div>
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="row portfolio-container">
                @foreach ($fasilitas as $data)
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                        <div class="position-relative overflow-hidden mb-2">
                            <img src="{{ asset('storage/fasilitas/' . $data->foto) }}" alt=""
                                class="img-fluid w-100" style="width:400px; height:300px; object-fit:cover;">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="{{ asset('storage/fasilitas/' . $data->foto) }}" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                                </a>
                            </div>
                            <div style="position: absolute; bottom: 0; width: 100%; background-color: rgba(0,128,0,0.8); color: white; text-align: center; padding: 8px 0;">
                            <h4 class=" text-dark ">{{ $data->nama_fasilitas }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    <!-- Fasilitas End -->
@endsection
