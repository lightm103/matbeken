@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-header bg-white border-bottom">
                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <span class="card-title">
                            Users Management
                        </span>
                        <a href="{{ route('datauser.create')}}" class="btn btn-primary" data-modal-title="Tambah User" data-size-modal="lg"
                            data-type="modal" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top"
                            data-bs-html="true" title="Tambah User">
                            <i class="ti ti-md ti-square-plus me-1 fs-4"></i>Tambah User
                        </a>
                    </div>
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
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->role}}</td>
                                <td>
                                    <div class="action-btn d-flex align-items-center justify-content-center">
                                        <a class="text-primary edit" href="#" data-modal-title="Edit User"
                                            data-size-modal="lg" data-type="modal" data-bs-toggle="tooltip"
                                            data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                            title="Edit User">
                                            <i class="ti ti-edit fs-5"></i>
                                        </a>
                                        {{-- <a class="text-dark delete ms-2"
                                    href="{{ route('users-setting.destroy', $item->id) }}" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top"
                                    data-bs-html="true" title="Hapus User">
                                    <i class="ti ti-trash fs-5"></i>
                                </a> --}}
                                        <form class="" action="#" method="post">
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
@endsection
