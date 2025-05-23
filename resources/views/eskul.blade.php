@extends('layouts.front')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="background-image: url('user/img/background.jpg');background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 100%;
        min-height: 50vh;">
            <h3 class="display-3 font-weight-bold text-white">Eskul</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="{{ url('/') }}">Beranda</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Eskul</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2 text-success">Eskul</span>
                </p>
                <h1 class="mb-4 text-success">Eskul SMK AL AMANAH</h1>
            </div>
            <div class="row pb-3">
                @foreach ($eskul as $data)
                    <div class="col-lg-4 mb-4">
                        <div class="card border-0 shadow-sm mb-2">
                            <img class="card-img-top mb-2" src="{{ asset('storage/eskul/' . $data->foto) }}"
                                alt="" style="width:350px; height: 350px;">
                            <div class="card-body bg-light text-center p-4">
                                <h4 class="" style="color: #2e7d32">{{ $data->nama_eskul }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
