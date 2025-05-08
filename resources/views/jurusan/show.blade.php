@extends('layouts.admin')
@section('content')

<body>
    <div class="container-fluid position-relative d-flex p-0">
                <div class="col-sm-12 col-xl-11 m-5">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Jurusan</h6>
                            <form action="{{Route('jurusan.update', $jurusan->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                             @method('PUT')
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Jurusan</label>
                                    <input type="text" class="form-control text-dark" id=""
                                        aria-describedby="" name="nama_jurusan" value="{{$jurusan->nama_jurusan}}" readonly>
                                </div>
                                <button type="submit" class="btn btn-primary">kembali</button>
                            </form>
                        </div>
                    </div>
        </div>
</body>

</html>
@endsection