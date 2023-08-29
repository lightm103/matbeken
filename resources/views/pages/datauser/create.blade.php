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
                    <form action="{{ route('datauser.store')}}" method="post" class="modal-body m-2">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="name" id="name" aria-describedby="helpName"
                                        placeholder="Nama">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" aria-describedby="helpEmail"
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="role_id" class="form-label">Role</label>
                                    <select class="form-select form-select" name="role" id="role_id">
                                        <option selected>Pilih Role</option>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                        <option value="owner">Owner</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        aria-describedby="helpPassword" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end my-3">
                            <button type="submit" class="btn btn-primary"><i class="ti ti-device-floppy me-2 fs-4"></i>Simpan</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
