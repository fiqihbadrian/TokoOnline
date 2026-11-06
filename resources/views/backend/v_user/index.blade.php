@extends('backend.v_layouts.app')

@section('content')
<!-- contentAwal -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{ $judul }}</h3>
                    
                    <a href="{{ route('backend.user.create') }}" class="btn btn-primary mb-3">
                        <button type="button" class="btn btn-primary">Tambah</button>
                    </a>

                    <!-- User Table -->
                    <div class="table-responsive mb-4">
                        <table class="table table-striped table-bordered" border="1" width="80%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Email</th>
                                    <th>Nama</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($index as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <!-- Note: Swapped nama and email to match your table headers -->
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->nama }}</td>
                                    <td>{{ $row->role }}</td>
                                    <td>{{ $row->status }}</td>
                                    <td>
                                        <a href="{{ route('backend.user.edit', $row->id) }}">
                                            <button type="button" class="btn btn-warning btn-sm">Ubah</button>
                                        </a>
                                        <form action="{{ route('backend.user.destroy', $row->id) }}" method="POST" style="display:inline;">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Basic Datatable Section -->
                    <h5 class="card-title">Basic Datatable</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- contentAkhir -->
@endsection