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
                <div class="col-md-8 offset-md-2"> <!-- Menggunakan kolom bootstrap untuk mengatur lebar konten form -->
                    <h1>Bukti Pembayaran Invoice</h1>
                    <form action="{{ route('storeconfirm')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                          <label for="no_invoice" class="form-label">No.Invoice</label>
                          <input type="text"
                            class="form-control" name="no_invoice" id="no_invoice" aria-describedby="helpId" placeholder="no_invoice">
                          <small id="helpId" class="form-text text-muted"></small>
                        </div>

                        <div class="mb-3">
                            <label for="file" class="form-label">Pilih Foto</label>
                            <input required type="file" class="form-control" name="file" id="file" placeholder="file"
                                aria-describedby="fileHelpId">
                            <div id="fileHelpId" class="form-text"></div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-5">Menunggu Konfirmasi Admin</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('landingpage/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('landingpage/js/custom.js') }}"></script>
</body>

</html>
