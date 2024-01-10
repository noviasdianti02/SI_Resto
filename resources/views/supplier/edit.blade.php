@extends('admin.admin_dashboard')

@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Edit Data Supplier</h4>
                        <form method="POST" action="{{ route('supplier.update', $supplier->supplier_id) }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="nama_supplier" class="form-label">Nama Supplier</label>
                                <input id="nama_supplier" value="{{ $supplier->nama_supplier }}" class="form-control"
                                    name="nama_supplier" type="text">
                                @error('nama_supplier')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="alamat_supplier" class="form-label">Alamat Supplier</label>
                                <textarea id="alamat_supplier" class="form-control" name="alamat_supplier" rows="3">{{ $supplier->alamat_supplier }}</textarea>
                                @error('alamat_supplier')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nohp_supplier" class="form-label">No. HP Supplier</label>
                                <input id="nohp_supplier" value="{{ $supplier->nohp_supplier }}" class="form-control"
                                    name="nohp_supplier" type="text">
                                @error('nohp_supplier')
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
