@extends('admin.admin_dashboard')

@section('admin')
    <div class="page-content">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Data Supplier</h6>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('supplier.create') }}" class="btn btn-primary ml-auto">Tambah Data</a>
                        </div>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Supplier ID</th>
                                        <th>Nama Supplier</th>
                                        <th>Alamat Supplier</th>
                                        <th>No. HP Supplier</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($suppliers as $supplier)
                                        <tr>
                                            <td>{{ $supplier->supplier_id }}</td>
                                            <td>{{ $supplier->nama_supplier }}</td>
                                            <td>{{ $supplier->alamat_supplier }}</td>
                                            <td>{{ $supplier->nohp_supplier }}</td>
                                            <td style="display: flex">

                                                <a href="{{ route('supplier.edit', $supplier->supplier_id) }}"
                                                    class="btn btn-warning" style="margin-right: 5px;">Edit</a>
                                                <form method="POST"
                                                    action="{{ route('supplier.destroy', $supplier->supplier_id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" style="margin-right: 5px;"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus supplier ini?')">Hapus</button>
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
