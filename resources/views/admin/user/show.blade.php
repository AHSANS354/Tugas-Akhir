@extends('admin.layout.app')
@section('content')
@foreach ($user as $u)    
<div class="card shadow p-3 mb-5">
    <h1 class="m-3">User Detail</h1>
    <div class="container mt-3">
        <div class="row m-3">
            <div class="col-6">Foto</div>
            <div class="col-6">:
                @empty($u->foto)
                <img src="{{asset('admin/img/no-foto.png')}}" alt="" width="200rem">
                @else
                <img src="{{asset('halaman/img/user/'.$u->foto)}}" alt="" width="200rem">
                @endempty
            </div>
        </div>
        <div class="row m-3">
            <div class="col-6">Id</div>
            <div class="col-6">: {{$u->id}}</div>
        </div>
        <div class="row m-3">
            <div class="col-6">Username</div>
            <div class="col-6">: {{$u->username}}</div>
        </div>
        <div class="row m-3">
            <div class="col-6">Password</div>
            <div class="col-6">: {{$u->password}}</div>
        </div>
        <div class="row m-3">
            <div class="col-6">Role</div>
            <div class="col-6">: {{$u->role}}</div>
        </div>
        <div class="row m-3">
            <div class="col-6">Email</div>
            <div class="col-6">: {{$u->email}}</div>
        </div>
        <div class="row m-3">
            <div class="col-6">Alamat</div>
            <div class="col-6">: {{$u->alamat}}</div>
        </div>
        <div class="text-center m-5">
            <a href="{{url('admin/user')}}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endforeach
@endsection