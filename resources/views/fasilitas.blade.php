@extends('layouts.front')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-success mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
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
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Fasilitas</span>
                </p>
                <h1 class="mb-4">Fasilitas Sekolah</h1>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-success m-1 active" data-filter="*">
                            Semua
                        </li>
                        <li class="btn btn-outline-success m-1" data-filter=".first">
                            Lapangan
                        </li>
                        <li class="btn btn-outline-success m-1" data-filter=".second">
                            Ruang Kelas
                        </li>
                        <li class="btn btn-outline-success m-1" data-filter=".third">
                            Lab
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                @foreach ($fasilitas as $data)
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img src="{{ asset('storage/fasilitas/' . $data->foto) }}" alt=""
                                class="img-fluid w-100" style="width:300px; height:200px; object-fit:cover;">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="{{ asset('storage/fasilitas/' . $data->foto) }}" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Fasilitas End -->
@endsection
