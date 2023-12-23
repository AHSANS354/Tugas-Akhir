@extends('halaman.app')
@section('front')
<section class="login mt-5 pt-5">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="{{asset('halaman/img/logo.png')}}"
            class="img-fluid" alt="Phone image">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1 card shadow p-5">
            <h3 align="center">Login</h3>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example13">{{ __('Email Address') }}</label>
              <input type="email" id="form1Example13" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
  
            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example23">{{ __('Password') }}</label>
              <input type="password" id="form1Example23" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="d-flex justify-content-around align-items-center mb-4">
              <!-- Checkbox -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
              <a href="#!">Forgot password?</a>
            </div>
  
            <!-- Submit button -->
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-lg btn-block w-100">Sign in</button>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col text-center">
                    <div>Belum punya akun ?</div>
                    <a href="{{route('register')}}" class="text-decoration-none">Daftar disini</a>
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
      </div>
    </div>
  </section>
@endsection