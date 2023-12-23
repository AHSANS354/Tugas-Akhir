@extends('halaman.app')

@section('front')
    <div class="container mt-5 pt-5">
        <form action="{{url('pesan/'.$id)}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h2>Data Pemesanan</h2>
                            <hr>
                            <label for="tgl_booking" class="form-label">Tanggal Booking</label>
                            <div class="input-group mb-3">
                                <input type="date" class="form-control @error('tgl_booking') is-invalid @enderror" id="tgl_booking" name="tgl_booking">
                                @error('tgl_booking')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <label for="jam" class="form-label">Jam</label>
                            <div class="input-group mb-3">
                                <input type="time" class="form-control @error('jam') is-invalid @enderror" id="jam" name="jam">
                                @error('jam')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <label for="capster" class="form-label">Capster</label>
                            <div class="card-body d-flex">
                                @foreach ($capster as $c)    
                                <div class="d-flex flex-column m-2">
                                    @empty($c->foto)
                                    <img src="{{asset('admin/img/no-foto.png')}}" alt="" width="50px">
                                    @else
                                    <img src="{{asset('admin/img/capster/'.$c->foto)}}" alt="" width="50px">
                                    @endempty
                                    <span>{{$c->nama}}</span>
                                </div>
                                @endforeach
                            </div>
                            <div class="input-group mb-3 mt-3">
                                <select name="capster" id="capster" class="form-control @error('capster') is-invalid @enderror">
                                    <option value="" disabled selected>Pilih Capster</option>
                                    @foreach ($capster as $c)
                                        <option value="{{$c->id}}">
                                            {{$c->nama}}
                                        </option>
                                    @endforeach
                                </select>
                                @error('capster')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3 border-bottom">
                                <h4>Total Pesanan</h4>
                            </div>

                            <div class="row py-2">
                                <div class="col-5">
                                    <span>Paket</span>
                                </div>
                                <div class="col-6">
                                    <h6>{{ $paket->nama }}</h6>
                                </div>
                            </div>
                            
                            <div class="row py-2">
                                <div class="col-5">
                                    <span>Harga</span>
                                </div>
                                <div class="col-6">
                                    <h6>Rp. {{ number_format($paket->harga,0,',','.') }}</h6>
                                </div>
                            </div>

                            <div class="d-flex flex-column mt-3">
                                <button class="btn btn-primary mb-3" type="submit">
                                    Pesan
                                </button>
                                <a class="btn btn-outline-primary" href="{{url('/')}}">
                                    Batal
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
