@extends('halaman.app')

@php
    if (auth()->user()->foto) {
        $foto = 'storage/' . auth()->user()->foto;
    } else {
        $foto = 'https://t4.ftcdn.net/jpg/01/86/29/31/360_F_186293166_P4yk3uXQBDapbDFlR17ivpM6B1ux0fHG.jpg';
    }
@endphp

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
@endpush

@section('front')
<div class="container mt-5 pt-5">
    <div class="main-body">
        <form method="POST" action="{{url('profile/store')}}" enctype="multipart/form-data">
            @csrf
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3 mt-5">
                    <div class="card">
                    <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <div class="mb-3 d-flex align-items-center gap-3">
                        <div  class="profile-img" style="max-width: 10rem; max-height: 10rem"></div>
    
                        <!-- Label dengan input file tersembunyi -->
                        <div class="has-validation">
                            <label for="gambarInput" class="btn btn-primary text-white mb-3">
                                <i class="fas fa-upload"></i> Unggah Gambar
                                <input type="file" id="gambarInput" accept="image/*" class="d-none"
                                    onchange="previewGambar(this)" name="foto">
                            </label>
    
                            <p class="text-muted mb-0">Pastikan gambar yang diunggah dengan format png/jpg/jpeg</p>
    
                            @error('foto')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                    <img id="preview" src="{{ URL::asset($foto) }}" alt="Admin" class="rounded-circle" width="150">
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
                        <input type="text" name="nama_lengkap" class="form-control" value="{{auth()->user()->customer->nama ?? '-'}}">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama Panggilan</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" name="nama_panggilan" class="form-control" value="{{auth()->user()->name}}">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" name="email" class="form-control" value="{{auth()->user()->email ?? '-'}}">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Telpon</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" name="no_telp" class="form-control" value="{{auth()->user()->customer->no_telp ?? '-'}}">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Alamat</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" name="alamat" class="form-control" value="{{auth()->user()->customer->alamat ?? '-'}}">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <button class="btn btn-info" type="submit">Edit</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
        </div>
    </div>
    @push('js')
        <script>
            function previewGambar(input) {
                let inputGambar = document.getElementById('gambarInput');
                let preview = document.getElementById('preview');

                let file = inputGambar.files[0];
                let reader = new FileReader();

                reader.onload = function(e) {
                    let img = new Image();
                    img.src = e.target.result;

                    img.onload = function() {
                        let canvas = document.createElement('canvas');
                        let ctx = canvas.getContext('2d');

                        // Menetapkan ukuran canvas menjadi 1:1 (persegi)
                        let size = Math.min(img.width, img.height);
                        canvas.width = size;
                        canvas.height = size;

                        // Menghitung posisi crop untuk gambar
                        let x = img.width > img.height ? (img.width - img.height) / 2 : 0;
                        let y = img.height > img.width ? (img.height - img.width) / 2 : 0;

                        // Menetapkan gambar hasil crop sebagai sumber gambar preview
                        ctx.drawImage(img, x, y, size, size, 0, 0, size, size);
                        preview.style.backgroundImage = `url(${canvas.toDataURL('image/jpeg')})`;
                    };
                };

                if (file) {
                    reader.readAsDataURL(file);
                }
            }
        </script>
    @endpush
@endsection