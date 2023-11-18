@extends('halaman.app')
@section('content')
<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
        
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1 card shadow p-5">
            <h3 align="center">Register</h3>
        <form method="POST" action="{{url('hal/register/store')}}" enctype="multipart/form-data">
            @csrf
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example13">Email</label>
                <input type="email" name="email" id="form1Example13" class="form-control form-control-lg" />
            </div>
            {{-- Username Input --}}
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example13">Username</label>
              <input type="text" name="username" id="form1Example13" class="form-control form-control-lg" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example23">Password</label>
              <input type="password" name="password" id="form1Example23" class="form-control form-control-lg" />
            </div>
            {{-- Role Hidden User --}}
            <input type="number" name="role_id" value="3" hidden>

            <!-- Submit button -->
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-lg btn-block w-100">Sign in</button>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col text-center">
                    <div>Sudah punya akun ?</div>
                    <a href="{{url('hal/login')}}" class="text-decoration-none">Login</a>
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