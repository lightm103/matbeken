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
                    <h1>Formulir Checkout Pembelian</h1>
                    <form action="proses_checkout.php" method="post">
                        <div class="form-group">
                            <label for="nama">Nama lengkap:</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Alamat Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat Pengiriman:</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="4" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="produk">Produk yang Dibeli:</label>
                            <input type="text" class="form-control" id="produk" name="produk" required>
                        </div>

                        <div class="form-group">
                            <label for="jumlah">Jumlah:</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" min="1"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="metode_pembayaran">Metode Pembayaran:</label>
                            <select class="form-control" id="metode_pembayaran" name="metode_pembayaran" required>
                                <option value="transfer_bank">Transfer Bank</option>
                                <option value="kartu_kredit">Kartu Kredit</option>
                                <option value="paypal">PayPal</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="metode_pembayaran">Metode Pengambilan</label>
                            <select class="form-control" id="metode_pengambilan" name="metode_pembayaran" required>
                                <option value="">Potong ditempat</option>
                                <option value="pengiriman">Pengiriman ke Alamat</option>
                            </select>
                        </div>
                        
                        <div class="form-group" id="jam_pemotongan_group" style="display: none;">
                            <label for="jam_pemotongan">Jam Pemotongan</label>
                            <input type="time" class="form-control" id="jam_pemotongan" name="jam_pemotongan">
                        </div>
                        
                        <div class="form-group" id="tanggal_pemotongan_group" style="display: none;">
                            <label for="tanggal_pemotongan">Tanggal Pemotongan</label>
                            <input type="date" class="form-control" id="tanggal_pemotongan" name="tanggal_pemotongan">
                        </div>
                                               
                        <button type="submit" class="btn btn-primary mt-5">Lanjutkan Pembayaran</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('landingpage/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('landingpage/js/custom.js') }}"></script>
     
    <script>
        const metodePengambilan = document.getElementById('metode_pengambilan');
        const jamPemotonganGroup = document.getElementById('jam_pemotongan_group');
        const tanggalPemotonganGroup = document.getElementById('tanggal_pemotongan_group');
    
        metodePengambilan.addEventListener('change', function () {
            if (metodePengambilan.value === 'pengiriman') {
                jamPemotonganGroup.style.display = 'block';
                tanggalPemotonganGroup.style.display = 'block';
            } else {
                jamPemotonganGroup.style.display = 'none';
                tanggalPemotonganGroup.style.display = 'none';
            }
        });
    </script>

</body>

</html>
