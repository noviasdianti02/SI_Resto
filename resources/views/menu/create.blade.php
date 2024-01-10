@extends('admin.admin_dashboard')

@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Tambah Data Menu</h4>
                        <form method="POST" action="{{ route('menu.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="nama_menu" class="form-label">Nama Menu</label>
                                    <input id="nama_menu" class="form-control" name="nama_menu" type="text">
                                    @error('nama_menu')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input id="harga" class="form-control" name="harga" type="text">
                                    @error('harga')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <textarea id="deskripsi" class="form-control" name="deskripsi" rows="8" placeholder="Masukkan Deskripsi..."></textarea>
                                    @error('deskripsi')
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
