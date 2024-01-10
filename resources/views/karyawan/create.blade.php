@extends('admin.admin_dashboard')

@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Tambah Data Karyawan</h4>
                        <form method="POST" action="{{ route('karyawan.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="nama_karyawan" class="form-label">Nama Karyawan</label>
                                <input id="nama_karyawan" class="form-control" name="nama_karyawan" type="text">
                                @error('nama_karyawan')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <select id="jabatan" class="form-control" name="jabatan">
                                    <option value="manager">Manager</option>
                                    <option value="supervisor">Supervisor</option>
                                    <option value="staff">Staff</option>
                                    <!-- Add more options as needed -->
                                </select>
                                @error('jabatan')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="gaji" class="form-label">Gaji</label>
                                <input id="gaji" class="form-control" name="gaji" type="text">
                                @error('gaji')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto Karyawan </label><br>
                                <input type="file" name="foto" accept="image/*">
                                @error('foto')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
