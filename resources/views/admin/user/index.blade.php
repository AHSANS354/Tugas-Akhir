@extends('admin.layout.app')
@section('content')
    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('admin/dahboard')}}">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User</li>
                </ol>
            </nav>
            <h3 class="text-center">User</h3>
            <div>
                <a href="{{url('admin/user/create')}}" class="btn btn-sm btn-info text-uppercase"><i class="fas fa-plus-circle"></i> Tambah</a>
                <a href="{{url('admin/user/exportPDF')}}" class="btn btn-sm btn-danger text-uppercase"><i class="fas fa-file-pdf"></i> PDF</a>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role}}</td>
                            <td class="align-middle d-flex justify-content-center gap-4">
                                <a href="{{url('admin/capster/show/'.$user->id)}}" class="text-info">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{url('/admin/capster/edit/'.$user->id)}}" class="text-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <!-- Button trigger modal -->
                                <a type="button" class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$user->id}}">
                                <i class="fas fa-trash"></i>
                                </a>
          
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah anda yakin ingin menghapus <strong>{{$user->nama}}</strong>?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <a href="{{url('admin/capster/delete/'.$user->id)}}" type="button" class="btn btn-danger">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection