@extends('layouts.admin')
@section('content')

<body>
    <div class="container-fluid position-relative d-flex p-0">
                                <div class="col-12 m-5">
                        <div class="bg-secondary rounded h-100 p-4">
                           <div class="panel-heading">
                                     <a href="{{route('industri.create')}}" class="btn btn-sm btn-primary">Tambah</a>
                                </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Industri</th>
                                            <th scope="col">Id Jurusan</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @php $no=1; @endphp
                                                 @foreach ($industri as $data)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $data->nama_industri}}</td>
                                                    <td scope="row">{{ $data->jurusan->nama_jurusan }}</td>
                                                    <td>
                                        <form action="{{Route('industri.destroy' , $data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{Route('industri.edit' , $data->id)}}"
                                            class="btn btn-success">Ubah</a>
                                            <a href="{{Route('industri.show' , $data->id)}}"
                                            class="btn btn-sm btn-warning">Tampilkan</a>
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                            </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
        </div>
</body>

</html>
@endsection