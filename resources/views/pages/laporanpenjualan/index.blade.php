@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-header bg-white border-bottom">
                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <span class="card-title">
                            Laporan Penjualan
                        </span>
                    </div>
                    <label for="tanggal-laporan">Pilih Tanggal Laporan:</label>
                    <select id="tanggal-laporan">
                        <option value="2023-08-01">1 Agustus 2023</option>
                        <option value="2023-08-02">2 Agustus 2023</option>
                        <option value="2023-08-03">3 Agustus 2023</option>
                        <!-- Anda bisa menambahkan opsi tanggal lainnya di sini -->
                    </select>
                </div>
                <div class="card-body">
                    <table class="table datatables-basic border table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th width=50>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th class="text-center" width=100>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>#</td>
                                <td>#</td>
                                <td>#</td>
                                <td>#</td>
                                <td>
                                    <div class="action-btn d-flex align-items-center justify-content-center">
                                        <a class="text-primary edit" href="#" data-modal-title="Edit User"
                                            data-size-modal="lg" data-type="modal" data-bs-toggle="tooltip"
                                            data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                            title="Edit User"> Detail
                                            <i class="ti ti-edit fs-5"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Mendapatkan elemen dropdown
        var dropdown = document.getElementById("tanggal-laporan");

        // Menambahkan event listener untuk mengambil nilai saat dipilih
        dropdown.addEventListener("change", function() {
            var selectedDate = dropdown.value;
            console.log("Tanggal yang dipilih:", selectedDate);
            // Anda dapat melakukan tindakan lain dengan tanggal yang dipilih di sini
        });
    </script>
@endsection
