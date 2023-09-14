@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="ti ti-md ti-square-plus me-1 fs-4"></i>Tambah Barang
                    </button>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Data Barang</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Stock</th>
                                    <th>Berat Kambing</th>
                                    <th>Harga</th>
                                    <th>Foto</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($databarang as $item)
                              <tr>
                                <td> {{$item->name}} </td>
                                <td> {{$item->stock}} </td>
                                <td> {{$item->berat}} </td>
                                <td> {{$item->harga}} </td>
                                <td style="vertical-align: middle"><img src="{{url('/storage/fotobarang/'.$item->foto)}}"
                                        style="width:60px; height:60px; object-fit:cover;"></td>
                                <td>
                                    <div class="action-btn d-flex align-items-center justify-content-center">
                                        <a class="text-primary edit" href="" data-modal-title="Edit User"
                                            data-size-modal="lg" data-type="modal" data-bs-toggle="tooltip"
                                            data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                            title="Edit User">
                                            <i class="ti ti-edit fs-5"></i>
                                        </a>
                                        <form class="" action="{{ route('databarang.destroy',$item->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-icon" type="submit" data-bs-toggle="tooltip"
                                                data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                                title="Hapus User"><i class="ti ti-trash fs-5"></i></button>
                                        </form>
                                    </div>
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
                                <label for="" class="form-label">Berat Kambing</label>
                                <input type="text" class="form-control" name="berat" id=""
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
