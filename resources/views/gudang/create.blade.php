@extends('admin.admin_dashboard')

@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Tambah Data Gudang</h4>
                        <form method="POST" action="{{ route('gudang.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="nama_bahan" class="form-label">Nama Bahan</label>
                                    <input id="nama_bahan" class="form-control" name="nama_bahan" type="text">
                                    @error('nama_bahan')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="stok" class="form-label">Stok</label>
                                    <input id="stok" class="form-control" name="stok" type="text">
                                    @error('stok')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
