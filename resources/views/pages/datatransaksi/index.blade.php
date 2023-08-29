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
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Stock</th>
                                    <th>Harga</th>
                                 
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Kambing Jantan</td>
                                    <td>1000</td>
                                    <td>1000000</td>
                                 
                                    <td>
                                        <div class="action-btn d-flex align-items-center justify-content-center">
                                            <a class="text-primary edit"
                                                href="" data-modal-title="Edit User" data-size-modal="lg" data-type="modal"
                                                data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top"
                                                data-bs-html="true" title="Edit User">
                                                <i class="ti ti-edit fs-5"></i>
                                            </a>
                                            <form class="" action="" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-icon" type="submit" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top"
                                                    data-bs-html="true" title="Hapus User"><i class="ti ti-trash fs-5"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
