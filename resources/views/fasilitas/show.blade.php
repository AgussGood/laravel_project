@extends('layouts.admin')
@section('content')

<body>
    <div class="container-fluid position-relative d-flex p-0">
                <div class="col-sm-12 col-xl-11 m-5">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Fasilitas</h6>
                            <form action="{{Route('fasilitas.update', $fasilitas->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                             @method('PUT')
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Fasilitas</label>
                                    <input type="text" class="form-control text-dark" id=""
                                        aria-describedby="" name="nama_fasilitas" value="{{$fasilitas->nama_fasilitas}}" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Foto</label><br>
                                     <img src="{{ asset('storage/fasilitas/' . $fasilitas->foto) }}" alt="" style="width:200px; height: 200px;">
                                </div>
                                <button type="submit" class="btn btn-primary">kembali</button>
                            </form>
                        </div>
                    </div>
        </div>
</body>

</html>
@endsection