@extends('halaman.app')

@section('front')
<div class="container mt-5 pt-5">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3 mt-5">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{auth()->user()->customer->nama ?? '-'}}</h4>
                      {{-- <p class="text-secondary mb-1">Full Stack Developer</p> --}}
                      <p class="text-muted font-size-sm">{{auth()->user()->email ?? '-'}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8 mt-5">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama Lengkap</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{auth()->user()->customer->nama ?? '-'}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama Panggilan</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{auth()->user()->name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{auth()->user()->email ?? '-'}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Telpon</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{auth()->user()->customer->no_telp ?? '-'}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Alamat</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{auth()->user()->customer->alamat ?? '-'}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " href="{{url('/profile/edit')}}">Edit</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection