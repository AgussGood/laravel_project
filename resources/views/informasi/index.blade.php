@extends('layouts.admin')
@section('content')

    <body>
        <div class="container-fluid position-relative d-flex p-0">
            <div class="col-12 m-5">
                <div class="bg-secondary rounded h-100 p-4">
                    <div class="panel-heading">
                        <a href="{{ route('informasi.create') }}" class="btn btn-sm btn-primary">Tambah</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach ($informasi as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->judul }}</td>
                                        <td>{{ Str::limit($data->deskripsi, 50) }}</td>
                                        <td scope="row"><img src="{{ asset('storage/informasi/' . $data->foto) }}"
                                                alt="" style="width:50px; height: 50px;"></td>
                                        <td>
                                            <form action="{{ Route('informasi.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ Route('informasi.edit', $data->id) }}"
                                                    class="btn btn-success">Ubah</a>
                                                <a href="{{ Route('informasi.show', $data->id) }}"
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
