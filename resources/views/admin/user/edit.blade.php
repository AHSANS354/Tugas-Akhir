@extends('admin.layout.app')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

@foreach ($user as $u)
<h1 align="center">Tambahkan Data User</h1>
<form method="POST" action="{{url('admin/user/update/'.$u->id)}}" class="m-5" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
      <label for="username" class="col-3 col-form-label">Username</label> 
      <div class="col-8">
          <input id="username" name="username" placeholder="Input username" type="text" class="form-control @error('username') is-invalid @enderror" value="{{$u->username}}">
          @error('username')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="col-3 col-form-label">Email</label> 
      <div class="col-8">
        <input id="email" name="email" placeholder="Input email" type="text" class="form-control @error('email') is-invalid @enderror" value="{{$u->email}}">
        @error('email')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="password" class="col-3 col-form-label">Password</label> 
      <div class="col-8">
        <input id="password" name="password" placeholder="Input password" type="text" class="form-control @error('password') is-invalid @enderror" value="{{$u->password}}">
        @error('password')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
    </div>
    <div class="form-group row">
        <label for="role_id" class="col-3 col-form-label">Role</label> 
        <div class="col-8">
        <select id="role_id" name="role_id" class="custom-select @error('role_id') is-invalid @enderror">
            <option value="">Pilih Role</option>
            @foreach ($role as $rl)
            @php $select = ($rl->id == $u->role_id) ? 'selected':''; @endphp
            <option value="{{$rl->id}}" {{$select}}>{{$rl->nama}}</option>
            @endforeach
        </select>
        @error('role_id')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
    </div>
    <div class="form-group row">
      <label for="alamat" class="col-3 col-form-label">Alamat</label> 
      <div class="col-8">
        <input id="alamat" name="alamat" placeholder="Input alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" value="{{$u->alamat}}">
        @error('alamat')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="foto" class="col-3 col-form-label">Foto</label> 
      <div class="col-8">
        <input id="foto" name="foto" type="file" class="form-control @error('foto') is-invalid @enderror">
        @empty($u->foto)
            <img src="{{asset('admin/img/no-foto.png')}}" alt="" width="200rem">
        @else
            <img src="{{asset('halaman/img/user/'.$u->foto)}}" alt="" width="200rem">
        @endempty
        @error('foto')
          <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
</div> 
<div class="form-group row">
    <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Tambah</button>
        <a class="btn btn-secondary" href="{{url('admin/user')}}">Kembali</a>
    </div>
</div>
</form>
@endforeach
@endsection