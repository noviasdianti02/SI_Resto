@extends('admin.admin_dashboard')

@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Edit Data Menu</h4>
                        <form method="POST" action="{{ route('menu.update', $menu->menu_id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="nama_menu" class="form-label">Nama Menu</label>
                                <input id="nama_menu" value="{{ $menu->nama_menu }}" class="form-control" name="nama_menu"
                                    type="text">
                            </div>

                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input id="harga" value="{{ $menu->harga }}" class="form-control" name="harga"
                                    type="text">
                            </div>

                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea id="deskripsi" class="form-control" name="deskripsi" rows="8" placeholder="Masukkan Deskripsi...">{{ $menu->deskripsi }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto Menu</label><br>
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
