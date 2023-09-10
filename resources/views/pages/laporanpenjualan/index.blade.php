@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Transaksi Barang</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="row">
                            <div class="col-md-3">
                                <label> Start Date:</label>
                                <input type="date" name="start_date" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label> End Date:</label>
                                <input type="date" name="end_date" class="form-control">
                            </div>
                            <div class="col-md-1 pt-3">
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </div>
                        </div>
                        <br>
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
                                    <th>Action</th>
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
                                        <a href="" class="btn btn-primary">
                                            <i class="ti ti-md ti-square-plus me-1 fs-4"></i>Detail
                                        </a>
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
    
@endsection
