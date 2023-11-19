@extends('admin.layout.app')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1 align="center">Tambahkan Data Paket</h1>
<form method="POST" action="{{url('admin/paket/store')}}" class="m-5" enctype="multipart/form-data">
    @csrf
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Paket</label> 
    <div class="col-6">
      <input id="nama" name="nama" type="text" placeholder="Input nama paket" class="form-control @error('nama') is-invalid @enderror">
      @error('nama')
          <div class="invalid-feedback">
            {{$message}}
          </div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
    <div class="col-6">
      <textarea id="deskripsi" name="deskripsi" cols="40" rows="3" placeholder="Input deskripsi paket" class="form-control @error('deskripsi') is-invalid @enderror""></textarea>
      @error('deskripsi')
          <div class="invalid-feedback">
            {{$message}}
          </div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="harga" class="col-4 col-form-label">Harga</label> 
    <div class="col-6">
      <input id="harga" name="harga" type="text" placeholder="Input harga paket" class="form-control @error('harga') is-invalid @enderror"">
      @error('harga')
          <div class="invalid-feedback">
            {{$message}}
          </div>
      @enderror
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Tambah</button>
      <a href="{{url('admin/paket')}}" class="btn btn-secondary">Kembali</a>
    </div>
  </div>
</form>
@endsection