@extends('layouts.admin')
@section('content')

<body>
    <div class="container-fluid position-relative d-flex p-0">
            <div class="col-sm-12 col-xl-11 m-5">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Industri</h6>
                    <form action="{{ Route('industri.update', $industri->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Industri</label>
                            <input type="text" class="form-control text-dark" id="" aria-describedby=""
                                name="nama_industri" value="{{ $industri->nama_industri }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Id Jurusan</label>
                            <input type="text" class="form-control text-dark" name="nama_jurusan"
                                value="{{ $industri->jurusan->nama_jurusan }}" readonly>
                        </div> <br>
                         <a href="{{route('industri.index')}}" class="btn btn-sm btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>
@endsection