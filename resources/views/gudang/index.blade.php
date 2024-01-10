@extends('admin.admin_dashboard')

@section('admin')
    <div class="page-content">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Data Gudang</h6>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('gudang.create') }}" class="btn btn-primary ml-auto">Tambah Data</a>
                        </div>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Bahan ID</th>
                                        <th>Nama Bahan</th>
                                        <th>Stok</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gudangs as $gudang)
                                        <tr>
                                            <td>{{ $gudang->bahan_id }}</td>
                                            <td>{{ $gudang->nama_bahan }}</td>
                                            <td>{{ $gudang->stok }}</td>
                                            <td style="display: flex">
                                                <a href="{{ route('gudang.edit', $gudang->bahan_id) }}"
                                                    class="btn btn-warning" style="margin-right: 5px;">Edit</a>
                                                <form method="POST"
                                                    action="{{ route('gudang.destroy', $gudang->bahan_id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" style="margin-right: 5px;"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
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
        </div>
    </div>
@endsection
