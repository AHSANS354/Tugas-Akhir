@extends('admin.layout.app')
@section('content')
    <!-- DataTales Example -->
    <div class="row card shadow p-4 m-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin/dahboard')}}">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">User</li>
            </ol>
        </nav>
        <h1 align="center">User</h1>

        <table class="table align-items-center" id="example">
            <div>
                <a href="{{url('admin/user/create')}}" class="mb-3 text-primary"><i class="fas fa-plus-circle mb-3"></i> Tambah</a>
            </div>
            
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary font-weight-bolder opacity-7">No</th>
                    <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Username</th>
                    <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Password</th>
                    <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Role</th>
                    <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Email</th>
                    <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Username</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 truncate">Password</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($user as $u)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td class="align-middle text-center">{{$u->username}}</td>
                    <td class="align-middle text-center text-truncate" style="max-width: 10px">{{$u->password}}</td>
                    <td class="align-middle text-center">{{$u->role}}</td>
                    <td class="align-middle text-center">{{$u->email}}</td>
                    <td class="align-middle d-flex justify-content-center gap-4">
                        <a href="{{url('admin/user/detail/'.$u->id)}}" class="text-info">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{url('/admin/user/edit/'.$u->id)}}" class="text-warning">
                            <i class="fas fa-edit"></i>
                        </a>
                        <!-- Button trigger modal -->
                        <a type="button" class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$u->id}}">
                        <i class="fas fa-trash"></i>
                        </a>
  
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{$u->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah anda yakin ingin menghapus <strong>{{$u->username}}</strong>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <a href="{{url('admin/user/delete/'.$u->id)}}" type="button" class="btn btn-danger">Delete</a>
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
@endsection