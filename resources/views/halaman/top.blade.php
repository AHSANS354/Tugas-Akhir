<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mari Mekarya Barbershop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('halaman/img/apple-icon.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('halaman/img/logo.png')}}">

    <link rel="stylesheet" href="{{asset('halaman/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('halaman/css/templatemo.css')}}">
    <link rel="stylesheet" href="{{asset('halaman/css/custom.css')}}">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{asset('halaman/css/fontawesome.min.css')}}">
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg bg-secondary text-white shadow fixed-top">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand logo h1 d-flex align-items-center" href="{{url('/')}}">
                <img src="{{asset('halaman/img/logo1.png')}}" alt="" width="70px">
                MEKARYA
            </a>

            <button class="navbar-toggler border-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{url('hal/login')}}"><i class="fas fa-sign-in-alt"></i> Login</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <button type="button" class="btn btn-warning text-white shadow"><strong>Reservasi</strong> <br> <span class="fs-6 fst-italic">Tanpa Antri</span></button>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->