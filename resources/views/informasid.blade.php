@extends('layouts.front')
@section('content')

    <!-- Header Start -->
    <div class="container-fluid mb-5">
        <div
          class="d-flex flex-column align-items-center justify-content-center"
          style="background-image: url('user/img/background.jpg');background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                width: 100%;
                min-height: 50vh;"
        >
          <h3 class="display-3 font-weight-bold text-white">Detail Artikel</h3>
          <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="{{url('/')}}">Beranda</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Detail Artikel</p>
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
                <span class="pr-2 text-success">Halaman Detail Artikel</span>
              </p>
              <h1 class="mb-3" style="color: #2e7d32">{{ $informasi->judul }}</h1>
            </div>
            <div class="mb-5">
                <img class="img-fluid rounded mb-4" src="{{ asset('storage/informasi/' . $informasi->foto) }}" alt="" style="width: 500px">
              <p>
                {{ $informasi->deskripsi }}
              </p>
            </div>
          </div>

        </div>
      </div>
      <!-- Detail End -->

@endsection