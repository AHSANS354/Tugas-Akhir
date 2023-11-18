@extends('admin.layout.app')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1 align="center">Tambahkan Data User</h1>
<form method="POST" action="{{url('admin/user/store')}}" class="m-5" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
      <label for="username" class="col-3 col-form-label">Username</label> 
      <div class="col-8">
        <input id="username" name="username" placeholder="Input username" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="col-3 col-form-label">Email</label> 
      <div class="col-8">
        <input id="email" name="email" placeholder="Input email" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="password" class="col-3 col-form-label">Password</label> 
      <div class="col-8">
        <input id="password" name="password" placeholder="Input password" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="role_id" class="col-3 col-form-label">Role</label> 
      <div class="col-8">
        <select id="role_id" name="role_id" class="custom-select">
            @foreach ($role as $rl)
            <option value="{{$rl->id}}">{{$rl->nama}}</option>
            @endforeach
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="alamat" class="col-3 col-form-label">Alamat</label> 
      <div class="col-8">
        <input id="alamat" name="alamat" placeholder="Input alamat" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="foto" class="col-3 col-form-label">Foto</label> 
      <div class="col-8">
        <input id="foto" name="foto" type="file" class="form-control">
      </div>
    </div> 
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Tambah</button>
        <a class="btn btn-secondary" href="{{url('admin/user')}}">Kembali</a>
      </div>
    </div>
  </form>
@endsection