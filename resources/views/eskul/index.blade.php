@extends('layouts.admin')
@section('content')
    <div class="col-12 m-5">
        <div class="bg-secondary rounded h-100 p-4">
            <div class="panel-heading">
                <a href="{{ route('eskul.create') }}" class="btn btn-sm btn-primary">Tambah</a>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Eskul</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($eskul as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama_eskul }}</td>
                                <td scope="row"><img src="{{ asset('storage/eskul/' . $data->foto) }}" alt=""
                                        style="width:50px; height: 50px;"></td>
                                <td>
                                    <form action="{{ Route('eskul.destroy', $data->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ Route('eskul.edit', $data->id) }}" class="btn btn-success">Ubah</a>
                                        <a href="{{ Route('eskul.show', $data->id) }}"
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
    @endsection
