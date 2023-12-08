@extends('admin.layout.app')
@section('content')

<h1 align="center" class="mt-5">Tambahkan Data Capster</h1>
@foreach ($capster as $c)
<form method="POST" action="{{url('admin/capster/update/'.$c->id)}}" class="m-5" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-6">
      <input id="nama" name="nama" placeholder="Input nama" type="text" class="mb-4 form-control border-white @error('nama') is-invalid @enderror" value="{{$c->nama}}">
      @error('nama')
      <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="no_telp" class="col-4 col-form-label">No Telpon</label> 
    <div class="col-6">
      <input id="no_telp" name="no_telp" placeholder="Input nomor telpon" type="text" class="mb-4 form-control border-white @error('no_telp') is-invalid @enderror" value="{{$c->no_telp}}">
      @error('no_telp')
      <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-6">
      <input id="email" name="email" placeholder="Input email" type="text" class="mb-4 form-control border-white @error('email') is-invalid @enderror" value="{{$c->email}}">
      @error('email')
          <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>
    </div> 
    <div class="form-group row">
    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
    <div class="col-6">
        <input id="deskripsi" name="deskripsi" placeholder="Input deskripsi" type="text" class="mb-4 form-control border-white @error('deskripsi') is-invalid @enderror" value="{{$c->deskripsi}}">
        @error('deskripsi')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div> 
  <div class="form-group row">
      <label for="foto" class="col-4 col-form-label">Foto</label> 
    <div class="col-6">
        <input id="foto" name="foto" type="file" class="mb-4 form-control @error('foto') is-invalid @enderror">
        @empty($c->foto)
                <img src="{{asset('admin/img/no-foto.png')}}" alt="" width="100rem">
                @else
                <img src="{{asset('admin/img/capster/'.$c->foto)}}" alt="" width="100rem">
                @endempty
        @error('foto')
        <div class="invalid-feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
  </div> 
  <div class="form-group row mt-5">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Tambah</button>
      <a href="{{url('admin/capster')}}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
</form>
@endforeach
@endsection