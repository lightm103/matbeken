@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Barang</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No Transaksi</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Nama Pembeli</th>
                                    <th>Nama Barang</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{$item->no_transaksi}}</td>
                                    <td>{{$item->tanggal_transaksi}}</td>
                                    <td>{{$item->nama}}</td>
                                    <td>{{$item->databarang->name}}</td>
                                    <td>{{$item->quantity}}</td>
                                    <td>{{$item->total}}</td>
                                    <td>{{$item->status}}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="ti ti-md ti-square-plus me-1 fs-4"></i>Detail
                                        </button>
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
     
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Aksi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" id="tambahbarang" enctype="multipart/form-data">
                        @csrf
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
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="tambahbarang" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
