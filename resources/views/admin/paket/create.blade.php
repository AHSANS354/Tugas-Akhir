@extends('admin.layout.app')
@section('content')

<h1 align="center">Tambahkan Data Paket</h1>
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{url('admin/paket/store')}}" class="m-5" enctype="multipart/form-data">
    @csrf
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Paket</label> 
    <div class="col-8 mb-4">
      <input id="nama" name="nama" type="text" placeholder="Input nama paket" class="form-control @error('nama') is-invalid @enderror">
      @error('nama')
          <div class="invalid-feedback">
            {{$message}}
          </div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Haircut</label> 
    <div class="col-8 d-flex gap-4 mb-4">
      <div class="form-check @error('haircut') is-invalid @enderror">
        <input class="form-check-input" type="radio" name="haircut" id="haircut" value="1" checked>
        <label class="form-check-label" for="haircut">
          Iya
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="haircut" id="haircut2" value="2">
        <label class="form-check-label" for="haircut2">
          Tidak
        </label>
      </div>
    </div>
    @error('haircut')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div> 
  <div class="form-group row">
    <label class="col-4">Keramas</label> 
    <div class="col-8 d-flex gap-4 mb-4">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="keramas" id="keramas" value="1" checked>
        <label class="form-check-label" for="keramas">
          Iya
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="keramas" id="keramas2" value="2">
        <label class="form-check-label" for="keramas2">
          Tidak
        </label>
      </div>
    </div>
    @error('keramas')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div> 
  <div class="form-group row">
    <label class="col-4">Pijat Tonic</label> 
    <div class="col-8 d-flex gap-4 mb-4">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="tonic" id="tonic" value="1" checked>
        <label class="form-check-label" for="tonic">
          Iya
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="tonic" id="tonic2" value="2">
        <label class="form-check-label" for="tonic2">
          Tidak
        </label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <label class="col-4">Creambath</label> 
    <div class="col-8 d-flex gap-4 mb-4">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="creambath" id="creambath" value="1" checked>
        <label class="form-check-label" for="creambath">
          Iya
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="creambath" id="creambath2" value="2">
        <label class="form-check-label" for="creambath2">
          Tidak
        </label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <label for="harga" class="col-4 col-form-label">Harga</label> 
    <div class="col-8 mb-4">
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