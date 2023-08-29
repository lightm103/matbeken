@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Barang</h4>
                    <form action="{{ route('datatransaksi.update', $data->id)}}" method="POST" id="tambahbarang" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="mb-3">
                                <label for="status" class="form-label">Ubah Status</label>
                                <select class="form-select form-select-lg" name="status" id="status">
                                    <option selected>Pilih Status</option>
                                    <option value="pending">Pending</option>
                                    <option value="sukses">Sukses</option>
                                    <option value="gagal">Gagal</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" form="tambahbarang" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
