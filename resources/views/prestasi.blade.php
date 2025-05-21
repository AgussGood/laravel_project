@extends('layouts.front')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-success mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Prestasi</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="{{ url('/') }}">Beranda</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Prestasi</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

        <!-- Class Start -->
        <div class="container-fluid pt-5">
            <div class="container">
              <div class="text-center pb-2">
                <p class="section-title px-5">
                  <span class="px-2 text-success">Prestasi</span>
                </p>
                <h1 class="mb-4" style="color: #2e7d32">Prestasi Sekolah</h1>
              </div>
              <div class="row">
                @foreach ( $prestasi as $data)
                <div class="col-lg-4 mb-5">
                  <div class="card border-0 bg-light shadow-sm pb-2">
                    <img class="card-img-top mb-2" src="{{ asset('storage/prestasi/' . $data->foto) }}"
                                alt="" style="width:350px; height: 350px;">
                    <div class="card-body text-center">
                      <h4 class="card-title" style="color: #2e7d32">{{ $data->nama_prestasi}}</h4>
                      <p class="card-text">
                        {{ $data->deskripsi }}
                      </p>
                    </div>
                    <div class="card-footer bg-transparent py-4 px-5">
                      <div class="row border-bottom">
                        <div class="col-6 py-1 text-right border-right">
                          <strong>Tanggal</strong>
                        </div>
                        <div class="col-6 py-1">{{ $data->tgl_prestasi }}</div>
                      </div>
                      <div class="row border-bottom">
                        <div class="col-6 py-1 text-right border-right">
                          <strong>Tingkat</strong>
                        </div>
                        <div class="col-6 py-1">{{ $data->tingkat }}</div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
          <!-- Class End -->
@endsection
