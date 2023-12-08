@extends('admin.layout.app')
@section('content')
@foreach ($capster as $c)    
<div class="card shadow p-3 mb-5">
    <h1 class="m-3">User Detail</h1>
    <div class="container mt-3">
        <div class="row m-3">
            <div class="col-6">Foto</div>
            <div class="col-6">:
                @empty($c->foto)
                <img src="{{asset('admin/img/no-foto.png')}}" alt="" width="200rem">
                @else
                <img src="{{asset('admin/img/capster/'.$c->foto)}}" alt="" width="200rem">
                @endempty
            </div>
        </div>
        <div class="row m-3">
            <div class="col-6">Id</div>
            <div class="col-6">: {{$c->id}}</div>
        </div>
        <div class="row m-3">
            <div class="col-6">Nama</div>
            <div class="col-6">: {{$c->nama}}</div>
        </div>
        <div class="row m-3">
            <div class="col-6">No Telpon</div>
            <div class="col-6">: {{$c->no_telp}}</div>
        </div>
        <div class="row m-3">
            <div class="col-6">Email</div>
            <div class="col-6">: {{$c->email}}</div>
        </div>
        <div class="row m-3">
            <div class="col-6">Deskripsi</div>
            <div class="col-6">: {{$c->deskripsi}}</div>
        </div>
        <div class="text-center m-5">
            <a href="{{url('admin/capster')}}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endforeach
@endsection