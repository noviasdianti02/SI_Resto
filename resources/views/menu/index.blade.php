@extends('admin.admin_dashboard')

@section('admin')
    <div class="page-content">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Data Menu</h6>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('menu.create') }}" class="btn btn-primary ml-auto">Tambah Data</a>
                        </div>
                        <div class="table-responsive">

                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Menu ID</th>
                                        <th>Nama Menu</th>
                                        <th>Harga</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($menus as $menu)
                                        <tr>
                                            <td>{{ $menu->menu_id }}</td>
                                            <td>{{ $menu->nama_menu }}</td>
                                            <td>{{ $menu->harga }}</td>
                                            <td>{{ $menu->deskripsi }}</td>
                                            <td style="display: flex">

                                                <a href="{{ route('menu.edit', $menu->menu_id) }}" class="btn btn-warning"
                                                    style="margin-right: 5px;">Edit</a>
                                                <form method="POST" action="{{ route('menu.destroy', $menu->menu_id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" style="margin-right: 5px;"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini?')">Hapus</button>
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
