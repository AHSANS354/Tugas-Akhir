@extends('halaman.app')
@section('front')
<section class="login mt-5 pt-5">
    <div class="container py-5">
        <div class="row d-flex align-items-center justify-content-center">
        
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1 card shadow p-5">
            <h3 align="center">Register</h3>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Username input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example13">{{ __('Username') }}</label>
                <input type="text" name="name" id="form1Example13" class="form-control form-control-lg @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus />
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            {{-- Nama Lengkap --}}
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example13">{{ __('Nama Lengkap') }}</label>
              <input type="text" name="nama_lengkap" id="form1Example13" class="form-control form-control-lg @error('nama_lengkap') is-invalid @enderror" value="{{ old('nama_lengkap') }}" required autocomplete="email" />
              @error('nama_lengkap')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            {{-- Email Input --}}
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example13">{{ __('Email') }}</label>
              <input type="email" name="email" id="form1Example13" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" />
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example23">{{ __('Password') }}</label>
              <input type="password" name="password" id="form1Example23" class="form-control form-control-lg @error('password') is-invalid @enderror" required autocomplete="new-password" />
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-outline mb-4">
              <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>

                  <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">
            </div>

            <!-- Submit button -->
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-lg btn-block w-100">{{ __('Register') }}</button>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col text-center">
                    <div>Sudah punya akun ?</div>
                    <a href="{{route('login')}}" class="text-decoration-none">Login</a>
                </div>
            </div>
  
            {{-- <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
            </div>
  
            <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!"
              role="button">
              <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
            </a>
            <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!"
              role="button">
              <i class="fab fa-twitter me-2"></i>Continue with Twitter</a> --}}
  
          </form>
        </div>

        <div class="col-md-8 col-lg-7 col-xl-6">
            <img src="{{asset('halaman/img/logo.png')}}"
              class="img-fluid" alt="Phone image">
          </div>

      </div>
    </div>
  </section>
@endsection