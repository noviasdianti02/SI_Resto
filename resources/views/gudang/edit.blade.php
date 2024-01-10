@extends('admin.admin_dashboard')

@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Edit Data Gudang</h4>
                        <form method="POST" action="{{ route('gudang.update', $gudang->bahan_id) }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="nama_bahan" class="form-label">Nama Bahan</label>
                                <input id="nama_bahan" value="{{ $gudang->nama_bahan }}" class="form-control"
                                    name="nama_bahan" type="text">
                            </div>

                            <div class="mb-3">
                                <label for="stok" class="form-label">Stok</label>
                                <input id="stok" value="{{ $gudang->stok }}" class="form-control" name="stok"
                                    type="text">
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
