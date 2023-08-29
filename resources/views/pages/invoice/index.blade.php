<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('landingpage/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('landingpage/css/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('landingpage/css/style.css') }}" rel="stylesheet">
    <title>Mat Beken </title>
</head>

<body>

    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brand" href="index.html">Mat Beken<span>.</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li><a class="nav-link" href="#"><img src="{{ asset('landingpage/images/user.svg') }}"></a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Shop</h1>
                    </div>
                </div>
                <div class="col-lg-7">

                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->


    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h4>Invoice Pembayaran</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Nomor Invoice:</strong> {{ $data['no_invoice']}}</p>
                        <p><strong>Tanggal:</strong> {{ $data['date']}}</p>
                        <p><strong>Nama Pembeli:</strong> {{ $data['nama']}}</p>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                    <th>Harga Satuan</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$data['produk']}}</td>
                                    <td>{{$data['jumlah']}}</td>
                                    <td>Rp. {{$data['harga']}}</td>
                                    <td>Rp. {{$data['total']}}</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3" class="text-right"><strong>Total:</strong></td>
                                    <td>Rp. {{$data['total']}}</td>
                                </tr>
                            </tfoot>
                        </table>

                        <p><strong>Metode Pembayaran:</strong> Transfer Bank</p>
                        <p><strong>Status Pembayaran:</strong> Menunggu Pembayaran</p>
                        <p><strong>Rekening Pembayaran:</strong> 1234556789012345 Atas Nama Jhon Doe (BANK BCA)</p>
                        <p><strong>Rekening Pembayaran:</strong> 1234556789012345 Atas Nama Jhon Doe (BANK BRI)</p>
                        <p><strong>Rekening Pembayaran:</strong> 1234556789012345 Atas Nama Jhon Doe (BANK MANDIRI)</p>
                    </div>
                 
                    <a href="{{ route('confirm')}}" class="btn btn-primary mt-5">Lanjutkan Pembayaran</a>
                  
                </div>

            </div>
        </div>
    </div>

    <script src="{{ asset('landingpage/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('landingpage/js/custom.js') }}"></script>
</body>

</html>
