@extends('halaman.app')
@section('front')
    <!-- Header Start -->
    <div class="container-fluid bg-secondary px-0 px-md-5 mb-5 mt-5">
        <div class="row align-items-center px-3">
          <div class="col-lg-6 text-center text-lg-left">
            <h4 class="text-white mb-4 mt-5 mt-lg-0">Barbershop</h4>
            <h1 class="display-3 font-weight-bold text-white">
              Mari_Mekarya
            </h1>
            <p class="text-white mb-4">
                Selamat datang di Barbershop kami. Kami hadir untuk memberikan pengalaman potong rambut yang istimewa dan pelayanan terbaik bagi setiap pelanggan. Kami percaya bahwa penampilan yang rapi dan percaya diri adalah kunci kesuksesan. Mari bergabung dengan kami dan rasakan kepuasan dari layanan kami. Terima kasih atas kepercayaan Anda.
            </p>
            <a href="" class="btn btn-primary mt-1 py-3 px-5" style="color: #2b2b2b; font-weight: bold">Booking</a>
          </div>
          <div class="col-lg-6 text-center text-lg-right p-4">
            <img class="img-fluid mt-5 rounded-60" src="{{asset('halaman/img/carousel-1.jpg')}}" alt="" />
          </div>
        </div>
      </div>
      <!-- Header End -->

    <!-- Facilities Start -->
    <div class="container-fluid pt-5">
        <div class="container pb-3">
          <div class="row">
            <div class="col-lg-4 col-md-6 pb-1">
              <div
                class="d-flex bg-light shadow-sm border-top rounded mb-4"
                style="padding: 30px"
              >
                <img src="{{asset('halaman/img/icon/cleaning.png')}}" alt="" width="50rem" height="50rem">
                <div class="pl-4">
                  <h1>Bersih</h4>
                  <p class="m-0">
                    Kami memiliki barbershop yang nyaman dan bersih untuk memberikan kenyamanan bagi pelanggan.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
              <div
                class="d-flex bg-light shadow-sm border-top rounded mb-4"
                style="padding: 30px"
              >
              <img src="{{asset('halaman/img/icon/hairdresser.png')}}" alt="" width="50rem" height="50rem">
                <div class="pl-4">
                  <h1>Barberman</h1>
                  <p class="m-0">
                    Kami menyediakan layanan potong rambut dan cukur dengan teknik terbaru dan terbaik.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
              <div
                class="d-flex bg-light shadow-sm border-top rounded mb-4"
                style="padding: 30px"
              >
              <img src="{{asset('halaman/img/icon/hair-clipper.png')}}" alt="" width="50rem" height="50rem">
                <div class="pl-4">
                  <h1>Alat Cukur</h1>
                  <p class="m-0">
                    Peralatan dan produk berkualitas tinggi untuk memberikan hasil yang memuaskan
                  </p>
                </div>
              </div>
            </div>
            {{-- <div class="col-lg-4 col-md-6 pb-1">
              <div
                class="d-flex bg-light shadow-sm border-top rounded mb-4"
                style="padding: 30px"
              >
                <i
                  class="flaticon-017-toy-car h1 font-weight-normal text-primary mb-3"
                ></i>
                <div class="pl-4">
                  <h4>Safe Transportation</h4>
                  <p class="m-0">
                    Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
                    lorem amet elitr vero...
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
              <div
                class="d-flex bg-light shadow-sm border-top rounded mb-4"
                style="padding: 30px"
              >
                <i
                  class="flaticon-025-sandwich h1 font-weight-normal text-primary mb-3"
                ></i>
                <div class="pl-4">
                  <h4>Healthy food</h4>
                  <p class="m-0">
                    Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
                    lorem amet elitr vero...
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
              <div
                class="d-flex bg-light shadow-sm border-top rounded mb-4"
                style="padding: 30px"
              >
                <i
                  class="flaticon-047-backpack h1 font-weight-normal text-primary mb-3"
                ></i>
                <div class="pl-4">
                  <h4>Educational Tour</h4>
                  <p class="m-0">
                    Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
                    lorem amet elitr vero...
                  </p>
                </div>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
      <!-- Facilities Start -->
  
      <!-- About Start -->
      {{-- <div class="container-fluid py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <img
                class="img-fluid rounded mb-5 mb-lg-0"
                src="{{asset('halaman/img/carousel-3.jpg')}}"
                alt=""
              />
            </div>
            <div class="col-lg-7">
              <p class="section-title pr-5">
                <span class="pr-2">Tentang Kami</span>
              </p>
              <h1 class="mb-4">Best Barbershop For You</h1>
              <p>
                Barbershop Mari Mekarya adalah barbershop eksklusif yang menawarkan layanan potong rambut dan perawatan rambut premium untuk pria dari segala usia. Dengan suasana yang santai dan layanan yang berkualitas, yang berkomitmen untuk memberikan pengalaman grooming terbaik bagi setiap pelanggan.
              </p>
              <div class="row pt-2 pb-4">
                <div class="col-6 col-md-4">
                  <img class="img-fluid rounded" src="{{asset('halaman/img/barber.jpg')}}" alt="" />
                </div>
                <div class="col-6 col-md-8">
                  <ul class="list-inline m-0">
                    <li class="py-2 border-top border-bottom">
                        Pilihan paket mulai dari paket: <br>
                        <i class="fa fa-check text-success"></i> Epic <br>
                        <i class="fa fa-check text-success"></i> Legend <br>
                        <i class="fa fa-check text-success"></i> Mithic
                    </li>
                    <li class="py-2 border-bottom">
                        Jl. Tasikmadu-Kebakkramat, RT.01/RW.05, Nangsri Lor, Nangsri, Kec. Kebakkramat, Kabupaten Karanganyar, Jawa Tengah
                    </li>
                    <li class="py-2 border-bottom">
                        Jam Operasional : 10.00 – 21.00 WIB
                    </li>
                  </ul>
                </div>
              </div>
              <a href="" class="btn btn-primary mt-2 py-2 px-4">Learn More</a>
            </div>
          </div>
        </div>
      </div> --}}
      <!-- About End -->
  
      <!-- Class Start -->
      <div class="container-fluid pt-5">
        <div class="container">
          <div class="text-center pb-2">
            <p class="section-title px-5">
              <span class="px-2 font-weight-bold">Pilihan Paket</span>
            </p>
            <h1 class="mb-4">Paket yang dapat dipilih!</h1>
          </div>
          <div class="row d-flex justify-content-between p-3">
            @foreach ($pakets as $paket)
            <div class="col-lg-3">
              <div class="card border-0 shadow pb-2">
                <div class="card-body @if($paket->nama == 'Epic') bg-success @elseif($paket->nama == 'Legend') bg-warning @elseif($paket->nama == 'Mythic') bg-danger @else bg-white @endif text-center">
                  <h3 class="card-title">Paket {{$paket->nama}}</h3>
                  <p class="card-text">
                    <strong>Rp.{{number_format($paket->harga,0,',','.')}}</strong>
                  </p>
                </div>
                <div class="card-footer bg-transparent py-4 px-5">
                    <div class="row border-bottom">
                      <div class="col-4 py-1 text-right">
                        @if ($paket->haircut == 1)
                        <i class="fa fa-check text-success"></i>
                            @else
                        <i class="fa fa-times text-danger"></i>
                        @endif
                      </div>
                      <div class="col-8 py-1">Haircut</div>
                    </div>
                    <div class="row border-bottom">
                      <div class="col-4 py-1 text-right">
                        @if ($paket->keramas == 1)
                        <i class="fa fa-check text-success"></i>
                            @else
                        <i class="fa fa-times text-danger"></i>
                        @endif
                      </div>
                      <div class="col-8 py-1">Keramas</div>
                    </div>
                    <div class="row border-bottom">
                      <div class="col-4 py-1 text-right">
                        @if ($paket->tonic == 1)
                        <i class="fa fa-check text-success"></i>
                            @else
                        <i class="fa fa-times text-danger"></i>
                        @endif
                      </div>
                      <div class="col-8 py-1">Pijat Tonic</div>
                    </div>
                    <div class="row">
                      <div class="col-4 py-1 text-right">
                        @if ($paket->creambath == 1)
                        <i class="fa fa-check text-success"></i>
                            @else
                        <i class="fa fa-times text-danger"></i>
                        @endif
                      </div>
                      <div class="col-8 py-1">Creambath</div>
                    </div>
                  </div>
                <a href="" class="btn btn-primary px-4 mx-auto mb-4">Pilih Paket</a>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <!-- Class End -->
  
      <!-- Registration Start -->
      {{-- <div class="container-fluid py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0">
              <p class="section-title pr-5">
                <span class="pr-2">Book A Seat</span>
              </p>
              <h1 class="mb-4">Book A Seat For Your Kid</h1>
              <p>
                Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo
                dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.
                Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                dolor
              </p>
              <ul class="list-inline m-0">
                <li class="py-2">
                  <i class="fa fa-check text-success mr-3"></i>Labore eos amet
                  dolor amet diam
                </li>
                <li class="py-2">
                  <i class="fa fa-check text-success mr-3"></i>Etsea et sit dolor
                  amet ipsum
                </li>
                <li class="py-2">
                  <i class="fa fa-check text-success mr-3"></i>Diam dolor diam
                  elitripsum vero.
                </li>
              </ul>
              <a href="" class="btn btn-primary mt-4 py-2 px-4">Book Now</a>
            </div>
            <div class="col-lg-5">
              <div class="card border-0">
                <div class="card-header bg-secondary text-center p-4">
                  <h1 class="text-white m-0">Book A Seat</h1>
                </div>
                <div class="card-body rounded-bottom bg-primary p-5">
                  <form>
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control border-0 p-4"
                        placeholder="Your Name"
                        required="required"
                      />
                    </div>
                    <div class="form-group">
                      <input
                        type="email"
                        class="form-control border-0 p-4"
                        placeholder="Your Email"
                        required="required"
                      />
                    </div>
                    <div class="form-group">
                      <select
                        class="custom-select border-0 px-4"
                        style="height: 47px"
                      >
                        <option selected>Select A Class</option>
                        <option value="1">Class 1</option>
                        <option value="2">Class 1</option>
                        <option value="3">Class 1</option>
                      </select>
                    </div>
                    <div>
                      <button
                        class="btn btn-secondary btn-block border-0 py-3"
                        type="submit"
                      >
                        Book Now
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      <!-- Registration End -->
  
      <!-- Team Start -->
      <div class="container-fluid pt-5">
        <div class="container">
          <div class="text-center pb-2">
            <p class="section-title px-5">
              <span class="px-2 font-weight-bold">Our Barberman</span>
            </p>
            <h1 class="mb-4">Meet Our Barberman</h1>
          </div>
          <div class="row d-flex justify-content-between">
            @foreach ($capster as $barber)
            <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div
                class="position-relative overflow-hidden mb-4"
                style="border-radius: 100%"
                >
                <img class="img-fluid" src="{{asset('admin/img/capster/'.$barber->foto)}}" alt="" width="150px"/>
                <div
                  class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"
                >
                  <a
                    class="btn btn-outline-light text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="#" aria-label="twitter"
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a
                    class="btn btn-outline-light text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="#" aria-label="facebook"
                    ><i class="fab fa-facebook-f"></i
                        ></a>
                        <a
                        class="btn btn-outline-light text-center px-0"
                        style="width: 38px; height: 38px"
                        href="#" aria-label="linkedin"
                        ><i class="fab fa-linkedin-in"></i
                            ></a>
                        </div>
                    </div>
                    <h3>{{$barber->nama}}</h3>
                    <i>{{$barber->jabatan}}</i>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->
  
      <!-- Testimonial Start -->
      <div class="container-fluid py-5">
        <div class="container p-0">
          <div class="text-center pb-2">
            <p class="section-title px-5">
              <span class="px-2">Testimonial</span>
            </p>
            <h1 class="mb-4">What Parents Say!</h1>
          </div>
          <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item px-3">
              <div class="bg-light shadow-sm rounded mb-4 p-4">
                <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr
                eirmod clita lorem. Dolor tempor ipsum clita
              </div>
              <div class="d-flex align-items-center">
                <img
                  class="rounded-circle"
                  src="img/testimonial-1.jpg"
                  style="width: 70px; height: 70px"
                  alt="Image"
                />
                <div class="pl-3">
                  <h5>Parent Name</h5>
                  <i>Profession</i>
                </div>
              </div>
            </div>
            <div class="testimonial-item px-3">
              <div class="bg-light shadow-sm rounded mb-4 p-4">
                <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr
                eirmod clita lorem. Dolor tempor ipsum clita
              </div>
              <div class="d-flex align-items-center">
                <img
                  class="rounded-circle"
                  src="img/testimonial-2.jpg"
                  style="width: 70px; height: 70px"
                  alt="Image"
                />
                <div class="pl-3">
                  <h5>Parent Name</h5>
                  <i>Profession</i>
                </div>
              </div>
            </div>
            <div class="testimonial-item px-3">
              <div class="bg-light shadow-sm rounded mb-4 p-4">
                <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr
                eirmod clita lorem. Dolor tempor ipsum clita
              </div>
              <div class="d-flex align-items-center">
                <img
                  class="rounded-circle"
                  src="img/testimonial-3.jpg"
                  style="width: 70px; height: 70px"
                  alt="Image"
                />
                <div class="pl-3">
                  <h5>Parent Name</h5>
                  <i>Profession</i>
                </div>
              </div>
            </div>
            <div class="testimonial-item px-3">
              <div class="bg-light shadow-sm rounded mb-4 p-4">
                <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr
                eirmod clita lorem. Dolor tempor ipsum clita
              </div>
              <div class="d-flex align-items-center">
                <img
                  class="rounded-circle"
                  src="img/testimonial-4.jpg"
                  style="width: 70px; height: 70px"
                  alt="Image"
                />
                <div class="pl-3">
                  <h5>Parent Name</h5>
                  <i>Profession</i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Testimonial End -->
@endsection