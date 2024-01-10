@extends('admin.admin_dashboard')

@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Data Karyawan</h6>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('karyawan.create') }}" class="btn btn-primary ml-auto">Tambah Data</a>
                        </div>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>

                                        <th>Karyawan ID</th>
                                        <th>Foto Karyawan</th>
                                        <th>Nama Karyawan</th>
                                        <th>Jabatan</th>
                                        <th>Gaji</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($karyawans as $karyawan)
                                        <tr>
                                            <td>{{ $karyawan->karyawan_id }}</td>
                                            <td>
                                                @if ($karyawan->foto)
                                                    <img src="{{ asset('storage/foto_karyawan/' . $karyawan->foto) }}"
                                                        alt="Foto Karyawan">
                                                @endif
                                            </td>
                                            <td>{{ $karyawan->nama_karyawan }}</td>
                                            <td>{{ $karyawan->jabatan }}</td>
                                            <td>{{ $karyawan->gaji }}</td>
                                            <td style="display: flex">

                                                <a href="{{ route('karyawan.edit', $karyawan->karyawan_id) }}"
                                                    class="btn btn-warning" style="margin-right: 5px;">Edit</a>
                                                <form method="POST"
                                                    action="{{ route('karyawan.destroy', $karyawan->karyawan_id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" style="margin-right: 5px;"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus karyawan ini?')">Hapus</button>
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
