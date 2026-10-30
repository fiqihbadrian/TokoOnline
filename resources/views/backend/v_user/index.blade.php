@extends('backend.v_layouts.app')

@section('content')
<!-- contentAwal -->
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>{{ $judul }}</h3>
        <a href="{{ route('backend.user.create') }}" class="btn btn-primary btn-sm">Tambah</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped" width="80%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($index as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->role }}</td>
                        <td>{{ $row->status }}</td>
                        <td>
                            <div class="d-flex gap-1">
                                <a href="{{ route('backend.user.edit', $row->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                                <form action="{{ route('backend.user.destroy', $row->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- contentAkhir -->
@endsection