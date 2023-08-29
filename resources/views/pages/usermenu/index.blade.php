@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">History Pembelian</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No Transaksi</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Nama Barang</th>
                                    <th>Quantity</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>10/05/2010</td>
                                    <td>Kambing Jantan</td>
                                    <td>1</td>
                                    <td>1000000</td>
                                    <td>Sukses</td>
                                    <td>
                                        <a class="text-primary edit" href="" data-modal-title="Edit User"
                                            data-size-modal="lg" data-type="modal" data-bs-toggle="tooltip"
                                            data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                            title="Edit User">
                                            <i class="ti ti-edit fs-5">Detail</i>
                                        </a>
                                    </td>
                                </tr>
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('databarang.store') }}" method="POST" id="tambahbarang" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" name="name" id=""
                                    aria-describedby="helpId" placeholder="">
                                <small id="helpId" class="form-text text-muted"></small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Stock</label>
                                <input type="text" class="form-control" name="stock" id=""
                                    aria-describedby="helpId" placeholder="">
                                <small id="helpId" class="form-text text-muted"></small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Harga</label>
                                <input type="text" class="form-control" name="harga" id=""
                                    aria-describedby="helpId" placeholder="">
                                <small id="helpId" class="form-text text-muted"></small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Pilih Foto</label>
                                <input type="file" class="form-control" name="foto" id="" placeholder=""
                                    aria-describedby="fileHelpId">
                                <div id="fileHelpId" class="form-text"></div>
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
