@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Bukti Pembayaran</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No Transaksi</th>
                                    <th>Bukti Pembayaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr style="vertical-align: middle">
                                    <td style="width: 10%">{{$item->no_invoice}}</td>
                                    <td style="width: 50%"><img src="{{ asset('storage/invoice/'.$item->file)}}" style="width:30%; height:auto;" alt=""></td>
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
