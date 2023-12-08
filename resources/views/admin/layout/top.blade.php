<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mari_Mekarya - Dashboard Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('halaman/img/logo.png')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('admin/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="m-2 text-dark">Mari_Mekarya</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{asset('admin/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">
                            @if (empty(Auth::user()->name))
                        {{''}}
                        @else
                        {{Auth::user()->name}}
                    @endif
                        </h6>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <span class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Master Data</span>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{url('admin/user')}}" class="dropdown-item ms-3">
                              <i class="fa fa-user"></i> User
                            </a>
                            <a href="{{url('admin/paket')}}" class="dropdown-item ms-3">
                              <i class="fa fa-book-reader"></i> Paket
                            </a>
                            <a href="{{url('/')}}" class="dropdown-item ms-3">
                              <i class="fa fa-check-circle"></i> Pesanan
                            </a>
                            <a href="{{url('admin/capster')}}" class="dropdown-item ms-3">
                              <i class="fa fa-cut"></i> Capster
                            </a>
                        </div>
                    </div>
                    <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
        <div class="content">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand sticky-top px-4 py-0 bg-white shadow">
          <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
              <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
          </a>
          <a href="#" class="sidebar-toggler flex-shrink-0">
              <i class="fa fa-bars"></i>
          </a>
          {{-- <form class="d-none d-md-flex ms-4">
              <input class="form-control bg-dark border-0" type="search" placeholder="Search">
          </form> --}}
          <div class="navbar-nav align-items-center ms-auto">
              <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                      <i class="fa fa-envelope me-lg-2"></i>
                      <span class="d-none d-lg-inline-flex">Message</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                      <a href="#" class="dropdown-item">
                          <div class="d-flex align-items-center">
                              <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                              <div class="ms-2">
                                  <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                  <small>15 minutes ago</small>
                              </div>
                          </div>
                      </a>
                      <hr class="dropdown-divider">
                      <a href="#" class="dropdown-item">
                          <div class="d-flex align-items-center">
                              <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                              <div class="ms-2">
                                  <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                  <small>15 minutes ago</small>
                              </div>
                          </div>
                      </a>
                      <hr class="dropdown-divider">
                      <a href="#" class="dropdown-item">
                          <div class="d-flex align-items-center">
                              <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                              <div class="ms-2">
                                  <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                  <small>15 minutes ago</small>
                              </div>
                          </div>
                      </a>
                      <hr class="dropdown-divider">
                      <a href="#" class="dropdown-item text-center">See all message</a>
                  </div>
              </div>
              <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                      <i class="fa fa-bell me-lg-2"></i>
                      <span class="d-none d-lg-inline-flex">Notificatin</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                      <a href="#" class="dropdown-item">
                          <h6 class="fw-normal mb-0">Profile updated</h6>
                          <small>15 minutes ago</small>
                      </a>
                      <hr class="dropdown-divider">
                      <a href="#" class="dropdown-item">
                          <h6 class="fw-normal mb-0">New user added</h6>
                          <small>15 minutes ago</small>
                      </a>
                      <hr class="dropdown-divider">
                      <a href="#" class="dropdown-item">
                          <h6 class="fw-normal mb-0">Password changed</h6>
                          <small>15 minutes ago</small>
                      </a>
                      <hr class="dropdown-divider">
                      <a href="#" class="dropdown-item text-center">See all notifications</a>
                  </div>
              </div>
              <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                      <img class="rounded-circle me-lg-2" src="{{asset('admin/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                      <span class="d-none d-lg-inline-flex">
                        @if (empty(Auth::user()->name))
                        {{''}}
                        @else
                        {{Auth::user()->name}}
                        @endif
                      </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end border-0 rounded-0 rounded-bottom m-0">
                      <a href="#" class="dropdown-item">My Profile</a>
                      <a href="#" class="dropdown-item">Settings</a>
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                          {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </div>
          </div>
      </nav>
      <!-- Navbar End -->