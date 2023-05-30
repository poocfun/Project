@include('layout.header')

<link href="{{ asset('template')}}/assets/css/main.css" rel="stylesheet">
  <!-- ======= Home Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center
        align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up" style="color: #B6FFCA">Tempat Terbaik untuk Mencari <br> Pekerjaan Sesuai dengan Skill <br> yang Dimiliki</h2>
          <p data-aos="fade-up" data-aos-delay="100">Temukan pekerjaan yang Anda sukai dan teliti perusahaan <br>
             dengan pertumbuhan tercepat, dan pekerjakan pekerja <br> berpengalaman.</p>

             <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
                <div class="form-group mr-2">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Nama Pekerjaan">
                    </div>
                </div>
                <div class="form-group mr-2">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Semua Lokasi">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary font-weight-bold" style="height: 38px; background-color:#fff; color:#0075FF;">Search</button>
              </form>

              <style>
                .transparent-input {
                  background-color: transparent;
                }
              </style>


        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="{{ asset('template')}}/assets/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Home Section -->



  <main id="main">



    <!-- ======= Sponsor Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">

          <div class="row gy-4">

            <div class="" >
              <div class="">
                <div class="text-center">
                    <h3>Dipercaya Beberapa Perusahaan di Indonesia yang <br> Menyediakan Lowongan dengan kami</h3>
                </div>
              </div>
            </div><!-- End Why Box -->

            <div class="col-lg-12 ">
              <div class="row">

                <div class="col-md-3" data-aos-delay="200">
                  <div class="img-fluid">
                    <img src="{{ asset('template/assets/img/sabana.png') }}" alt="">
                  </div>
                </div><!-- End Sabana -->

                <div class="col-md-3"  data-aos-delay="300">
                  <div class="">
                    <img class="img-fluid" src="{{ asset('template/assets/img/jiwa.png') }}" alt="">
                  </div>
                </div><!-- jiwa -->

                <div class="col-md-3" data-aos-delay="400">
                  <div class="">
                    <img src="{{ asset('template/assets/img/mangkok.png') }}" alt="">
                  </div>
                </div><!-- End mangkok -->

                <div class="col-md-3" data-aos-delay="400">
                  <div class="">
                    <img src="{{ asset('template/assets/img/pondok.png') }}"  alt="">
                  </div>
                </div><!-- End pondok -->

              </div>
            </div>

          </div>

        </div>
      </section><!-- End Sponsor Section -->





    <!-- ======= KerjaGan Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2 class="btn-book animated fadeInUp scrollto">Kenapa KerjaGan</h2><br>
          <p style="color: #ffffff; font-weight: bold; font-size: 40px;">Cara Baru Untuk Mendapatkan Pekerjaan</p>
          <br>
          <p style="color: #ffffff; font-weight: bold; font-size: 20px;">Setelah Anda Mendapatkan Akses ke platform KerjaGan, Anda <br> Memulai dengan Menambahkan Peran tim Pertama Anda</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us">
              <h4>Saya Mencari Pekerjaan</h4>
              <p>Cari Loker sesuai dengan skill yang <br> dimiliki!</p>
            </div>
            <br>
            <div class="container text-white" >
                <p><i class="fa fa-cog bg-white" aria-hidden="true" style="background-color: #fff; border-radius: 50%; padding: 10px; box-shadow: 0px 0px 5px rgba(0,0,0,0.2); color:#000; font-size: 1rem;"></i> Cari Loker yang SESUAI Profilmu</p>
                <br>
                <p><i class="bi bi-shield-check" style="background-color: #fff; border-radius: 50%; padding: 8px; box-shadow: 0px 0px 5px rgba(0,0,0,0.2); color:#000; font-size: 1rem;"></i> Cari Tanda AMAN untuk lamar kerja yang terverifikasi</p>
                <br>
                <p><i class="bi bi-file-earmark-person" style="background-color: #fff; border-radius: 50%; padding: 10px; box-shadow: 0px 0px 5px rgba(0,0,0,0.2); color:#000; font-size: 1rem;"></i> Buat CV dan Portfolio untuk tampil profesional</p>
                <br>
                <p><i class="fa fa-eye" style="background-color: #fff; border-radius: 50%; padding: 10px; color:#000; font-size: 1rem;"></i> Pantau STATUS Lamaranmu</p>
                <br>
                <p><i class="fa-solid fa-file-lines"  style="background-color: #fff; border-radius: 50%; padding: 10px; color:#000; font-size: 1rem;"></i> Terdaftar dan Diawasi oleh KOMINFO</p>
            </div>
        </div>


          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <div class="">
                <div class="call-us">
                    <h4>Saya Mencari Kandidat</h4>
                    <p>Pasang Loker, GRATIS <br><br></p>
                </div>
                <br>
                <div class="container text-white">
                    <p><i class="bi bi-people-fill" style="background-color: #fff; border-radius: 50%; padding: 10px; color:#000; font-size: 1rem;"></i> Cari Loker yang SESUAI Profilmu</p>
                    <br>
                    <p><i class="fas fa-medal" style="background-color: #fff; border-radius: 50%; padding: 10px; color:#000; font-size: 1rem;"></i> Rekrut Kandidat TERBAIK Sesuai Kebutuhan Anda</p>
                    <br>
                    <p><i class="fas fa-hands" style="background-color: #fff; border-radius: 50%; padding: 10px; color:#000; font-size: 1rem;"></i> Proses MUDAH untuk Rekrut Kandidat</p>
                    <br>
                    <p><i class="far fa-handshake" style="background-color: #fff; border-radius: 50%; padding: 10px; box-shadow: 0px 0px 5px rgba(0,0,0,0.2); color:#000; font-size: 1rem;"></i> Kandidat yang AMAN dan TEPERCAYA</p>
                    <br>
                    <p><i class="far fa-star" style="background-color: #fff; border-radius: 50%; padding: 10px; box-shadow: 0px 0px 5px rgba(0,0,0,0.2); color:#000; font-size: 1rem;"></i> Akses EKSKLUSIF gratis untuk Anda</p>
                 </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End KerjaGan  Section -->



    <!-- ======= Features Section ======= -->
    <section id="features" class="features" style="background: #EAEAEA">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h4 class="btn-menu animated fadeInUp scrollto"> Cara Kerjanya</h4>
                <p style="font-weight: bold; font-size: 30px;">Memulai itu Mudah</p><br>
                <p style="font-weight: bold; font-size: 20px; color: #5C5C5C;">Buat profil dan kami akan mencocokkan Anda dengan <br>
                    perusahaan dan pekerjaan impian terbaik Anda di Indonesia</p>
                    <br>
              </div>

            <div class="tab-content">

                <div class="tab-pane active show" id="tab-1">
                <div class="row gy-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 " >
                                    <center>
                                        <img src="{{ asset('template')}}/assets/img/reservation.jpeg" height="400px">

                                    </center>

                                </div>
                                <div class="col-lg-6 mt-5">
                                    <h3 style="color: #0064DA">01</h3>
                                    <p style="font-weight: bold; font-size: 25px;">Login atau Register</p>
                                    <p>Buat akun terlebih dahulu <br> menggunakan akun google atau  E- <br>mail</p>
                                    <hr style="width: 50%;">
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-2">
                                            <a href="" class="btn btn-primary" style="font-weight: bold;">Login</a>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="" class="btn btn-primary" style="font-weight: bold;">Daftar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div><!-- End Tab Content 1 -->

                <div class="tab-pane" id="tab-2">
                <div class="row gy-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 " >
                                    <center>
                                        <img src="{{ asset('template')}}/assets/img/cheklist.jpeg" height="380px">

                                    </center>

                                </div>
                                <div class="col-lg-6 mt-5">
                                    <h3 style="color: #0064DA">02</h3>
                                    <p style="font-weight: bold; font-size: 25px;">Isi data Pribadi Anda</p>
                                    <p>Isi Data Pribadi secara menyeluruh <br> untuk Pembuatan CV ataupun <br> Portofolio</p>
                                    <hr style="width: 50%;">
                                    <ul>
                                    <li>Mudah</li>
                                    <li>Simple</li>
                                    <li>Cepat</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div><!-- End Tab Content 2 -->

                <div class="tab-pane" id="tab-3">
                <div class="row gy-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 " >
                                    <center>
                                        <img src="{{ asset('template')}}/assets/img/cv.jpeg" height="400px">

                                    </center>

                                </div>
                                <div class="col-lg-6 mt-5">
                                    <h3 style="color: #0064DA">03</h3>
                                    <p style="font-weight: bold; font-size: 25px;">Buat / Kirim CV dan Portofolio</p>
                                    <p>Anda bisa buat CV dan Portofolio <br> secara Otomatis ataupun Bisa <br> Upload CV dan portofolio lohhhhh.....</p>
                                    <hr style="width: 55%;">
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-2">
                                            <a href="" class="btn btn-primary" style="font-weight: bold;">Buat</a>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="" class="btn btn-primary" style="font-weight: bold;">Upload</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div><!-- End Tab Content 3 -->

                <div class="tab-pane" id="tab-4">
                <div class="row gy-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 " >
                                    <center>
                                        <img src="{{ asset('template')}}/assets/img/lamaran.jpeg" height="350px">

                                    </center>

                                </div>
                                <div class="col-lg-6 mt-5">
                                    <h3 style="color: #0064DA">04</h3>
                                    <p style="font-weight: bold; font-size: 25px;">Cari dan Lamar Pekerjaan</p>
                                    <p>Terdapat Puluhan hingga ratusan <br> Perusahaan yang membutuhkan skill <br> yang kamu miliki. AYO Lamar <br> sekarang......</p>
                                    <hr style="width: 50%;">
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-5">
                                            <a href="" class="btn btn-primary" style="font-weight: bold;">Lamar Pekerjaan ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div><!-- End Tab Content 4 -->
            </div>

          <ul class="nav nav-tabs row gy-4 d-flex">

            <li class="nav-item col-6 col-md-3 col-lg-3">
              <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                <hr style="height: 5px; border-width: 0; background-color: #000;">
                <h4>01</h4>
                <p style="font-weight: bold; font-size: 15px;">Login atau Register</p>
                <p style="font-size: 13px;">Ikuti seluruh langkah dan Anda siap untuk memulai</p>
              </a>
            </li><!-- End Tab 1 Nav -->

            <li class="nav-item col-6 col-md-3 col-lg-3">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                <hr style="height: 5px; border-width: 0; background-color: #000;">
                <h4>02</h4>
                <p style="font-weight: bold; font-size: 15px;">Isi data Pribadi Anda</p>
                <p style="font-size: 13px;">Ikuti seluruh langkah dan Anda siap untuk memulai</p>
              </a>
            </li><!-- End Tab 2 Nav -->

            <li class="nav-item col-6 col-md-3 col-lg-3">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                <hr style="height: 5px; border-width: 0; background-color: #000;">
                <h4>03</h4>
                <p style="font-weight: bold; font-size: 15px;">Buat / kirim CV dan Portofolio</p>
                <p style="font-size: 13px;">Ikuti seluruh langkah dan Anda siap untuk memulai</p>
              </a>
            </li><!-- End Tab 3 Nav -->

            <li class="nav-item col-6 col-md-3 col-lg-3">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                <hr style="height: 5px; border-width: 0; background-color: #000;">
                <h4>04</h4>
                <p style="font-weight: bold; font-size: 15px;">Temukan Pekerjaan Sekarang</p>
                <p style="font-size: 13px;">Ikuti seluruh langkah dan Anda siap untuk memulai</p>
              </a>
            </li><!-- End Tab 4 Nav -->

          </ul>
        </div>
      </section><!-- End Features Section -->



    <!-- ======= Lowongan Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2 class="btn-lowongan animated fadeInUp scrollto">Lowongan</h2>
          <p style="font-weight: bold; font-size: 30px;">Temukan pekerjaan terbaik</p>
          <br>
          <p style="font-weight: bold; font-size: 20px; color: #5C5C5C;">Mulailah karir dengan perusahaan terbaik di Indonesia, kami <br> memastikan Anda mendapatkan pekerjaan terbaik</p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="card" style="width: 300px">
                <center>
                <div class="row">
                    <li class="nav-item col-md-6">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
                        <h4>Popular</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-md-6">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#">
                        <h4>Terbaru</h4>
                        </a><!-- End tab nav item -->
                    </li>
                </div>
                </center>
            </div>
        </ul>


        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
            </div>

            <div class="row gy-5">

                <div class="col-md-6">
                    <!-- Widget: user widget style 2 -->
                    <div class="card card-widget widget-user-2" style="border-radius: 30px">
                      <!-- Add the bg color to the header using any of the bg-* classes -->
                      <div class="widget-user-header">
                        <div class="float-right">
                           <a href=""><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></i></a>
                        </div>
                            <div class="widget-user-image">
                                <img class="img-circle elevation-2" src="{{ asset('admin/dist/img/avatar.png') }}" alt="User Avatar">
                            </div>

                            <!-- /.widget-user-image -->
                            <h4 class="widget-user-username" style="font-weight: bold;">Akutansi</h4>
                            <h6 class="widget-user-desc">Nama PT</h6>
                            <br>
                            <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem <br> Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum <br>
                                Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem <br> Ipsum Lorem Ipsum Lorem Ipsum</p>

                      </div>
                      <div class="card-footer">
                        <div class="row">
                          <div class="col-sm-4 border-right">
                            <div class="description-block">
                              <p class="description-header"><i class="fa fa-map-marker-alt"></i> Tanj. Pinang</p>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-5 border-right">
                            <div class="description-block">
                              <h5 class="description-header"><i class="fa-solid fa-sack-dollar"></i> Rp 7.000.000/Bulan</h5>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-3">
                            <div class="description-block">
                              <h5 class="description-header">Contact</h5>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->
                      </div>
                    </div>
                    <!-- /.widget-user -->
                </div>

                <div class="col-md-6">
                    <!-- Widget: user widget style 2 -->
                    <div class="card card-widget widget-user-2" style="border-radius: 30px">
                      <!-- Add the bg color to the header using any of the bg-* classes -->
                      <div class="widget-user-header">
                        <div class="float-right">
                           <a href=""><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></i></a>
                        </div>
                            <div class="widget-user-image">
                                <img class="img-circle elevation-2" src="{{ asset('admin/dist/img/avatar.png') }}" alt="User Avatar">
                            </div>

                            <!-- /.widget-user-image -->
                            <h4 class="widget-user-username" style="font-weight: bold;">Akutansi</h4>
                            <h6 class="widget-user-desc">Nama PT</h6>
                            <br>
                            <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem <br> Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum <br>
                                Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem <br> Ipsum Lorem Ipsum Lorem Ipsum</p>

                      </div>
                      <div class="card-footer">
                        <div class="row">
                          <div class="col-sm-4 border-right">
                            <div class="description-block">
                              <p class="description-header"><i class="fa fa-map-marker-alt"></i> Tanj. Pinang</p>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-5 border-right">
                            <div class="description-block">
                              <h5 class="description-header"><i class="fa-solid fa-sack-dollar"></i> Rp 7.000.000/Bulan</h5>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-3">
                            <div class="description-block">
                              <h5 class="description-header">Contact</h5>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->
                      </div>
                    </div>
                    <!-- /.widget-user -->
                </div>

                <div class="col-md-6">
                    <!-- Widget: user widget style 2 -->
                    <div class="card card-widget widget-user-2" style="border-radius: 30px">
                      <!-- Add the bg color to the header using any of the bg-* classes -->
                      <div class="widget-user-header">
                        <div class="float-right">
                           <a href=""><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></i></a>
                        </div>
                            <div class="widget-user-image">
                                <img class="img-circle elevation-2" src="{{ asset('admin/dist/img/avatar.png') }}" alt="User Avatar">
                            </div>

                            <!-- /.widget-user-image -->
                            <h4 class="widget-user-username" style="font-weight: bold;">Akutansi</h4>
                            <h6 class="widget-user-desc">Nama PT</h6>
                            <br>
                            <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem <br> Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum <br>
                                Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem <br> Ipsum Lorem Ipsum Lorem Ipsum</p>

                      </div>
                      <div class="card-footer">
                        <div class="row">
                          <div class="col-sm-4 border-right">
                            <div class="description-block">
                              <p class="description-header"><i class="fa fa-map-marker-alt"></i> Tanj. Pinang</p>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-5 border-right">
                            <div class="description-block">
                              <h5 class="description-header"><i class="fa-solid fa-sack-dollar"></i> Rp 7.000.000/Bulan</h5>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-3">
                            <div class="description-block">
                              <h5 class="description-header">Contact</h5>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->
                      </div>
                    </div>
                    <!-- /.widget-user -->
                </div>


                <div class="col-md-6">
                    <!-- Widget: user widget style 2 -->
                    <div class="card card-widget widget-user-2" style="border-radius: 30px">
                      <!-- Add the bg color to the header using any of the bg-* classes -->
                      <div class="widget-user-header">
                        <div class="float-right">
                           <a href=""><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></i></a>
                        </div>
                            <div class="widget-user-image">
                                <img class="img-circle elevation-2" src="{{ asset('admin/dist/img/avatar.png') }}" alt="User Avatar">
                            </div>

                            <!-- /.widget-user-image -->
                            <h4 class="widget-user-username" style="font-weight: bold;">Akutansi</h4>
                            <h6 class="widget-user-desc">Nama PT</h6>
                            <br>
                            <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem <br> Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum <br>
                                Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem <br> Ipsum Lorem Ipsum Lorem Ipsum</p>

                      </div>
                      <div class="card-footer">
                        <div class="row">
                          <div class="col-sm-4 border-right">
                            <div class="description-block">
                              <p class="description-header"><i class="fa fa-map-marker-alt"></i> Tanj. Pinang</p>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-5 border-right">
                            <div class="description-block">
                              <h5 class="description-header"><i class="fa-solid fa-sack-dollar"></i> Rp 7.000.000/Bulan</h5>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-3">
                            <div class="description-block">
                              <h5 class="description-header">Contact</h5>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->
                      </div>
                    </div>
                    <!-- /.widget-user -->
                </div>

                <div class="col-md-6">
                    <!-- Widget: user widget style 2 -->
                    <div class="card card-widget widget-user-2" style="border-radius: 30px">
                      <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header">
                            <div class="float-right">
                            <a href=""><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></i></a>
                            </div>
                                <div class="widget-user-image">
                                    <img class="img-circle elevation-2" src="{{ asset('admin/dist/img/avatar.png') }}" alt="User Avatar">
                                </div>

                                <!-- /.widget-user-image -->
                                <h4 class="widget-user-username" style="font-weight: bold;">Akutansi</h4>
                                <h6 class="widget-user-desc">Nama PT</h6>
                                <br>
                                <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem <br> Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum <br>
                                    Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem <br> Ipsum Lorem Ipsum Lorem Ipsum</p>
                        </div>

                      <div class="card-footer">
                        <div class="row">
                          <div class="col-sm-4 border-right">
                            <div class="description-block">
                              <p class="description-header"><i class="fa fa-map-marker-alt"></i> Tanj. Pinang</p>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-5 border-right">
                            <div class="description-block">
                              <h5 class="description-header"><i class="fa-solid fa-sack-dollar"></i> Rp 7.000.000/Bulan</h5>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-3">
                            <div class="description-block">
                              <h5 class="description-header">Contact</h5>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->
                      </div>
                    </div>
                    <!-- /.widget-user -->
                </div>

                <div class="col-md-6">
                    <!-- Widget: user widget style 2 -->
                    <div class="card card-widget widget-user-2" style="border-radius: 30px">
                      <!-- Add the bg color to the header using any of the bg-* classes -->
                      <div class="widget-user-header">
                        <div class="float-right">
                           <a href=""><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
                        </div>
                            <div class="widget-user-image">
                                <img class="img-circle elevation-2" src="{{ asset('admin/dist/img/avatar.png') }}" alt="User Avatar">
                            </div>

                            <!-- /.widget-user-image -->
                            <h4 class="widget-user-username" style="font-weight: bold;">Akutansi</h4>
                            <h6 class="widget-user-desc">Nama PT</h6>
                            <br>
                            <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem <br> Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum <br>
                                Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem <br> Ipsum Lorem Ipsum Lorem Ipsum</p>

                      </div>
                      <div class="card-footer">
                        <div class="row">
                          <div class="col-sm-4 border-right">
                            <div class="description-block">
                              <p class="description-header"><i class="fa fa-map-marker-alt"></i> Tanj. Pinang</p>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-5 border-right">
                            <div class="description-block">
                              <h5 class="description-header"><i class="fa-solid fa-sack-dollar"></i> Rp 7.000.000/Bulan</h5>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-3">
                            <div class="description-block">
                              <h5 class="description-header">Contact</h5>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->
                      </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <div>
                    <center>
                    <p style="font-weight: bold">Tidak menemukan pekerjaan yang Anda cari?<span style="color: #0064DA; text-decoration: underline;"><a href=""> Lihat Semua Loker  <i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                    </center>
                </div>
            </div>
        </div><!-- End Starter Lowongan Content -->
      </div>

      <div class="icon-boxes position-relative">
        <div class="container position-relative">
            <div class="row gy-4 mt-5">

            </div>
        </div>
      </div>

      <div class="card" style="background-color: #0064DA; border-radius: 20px">
        <div class="card-body">
            <div class="row">
              <div class="col-md-2"></div>
                <div class="col-lg-4" style="margin-top: 50px">
                    <p style="font-weight: bold; font-size: 25px;" class="text-white">Siapkan peringatan <br> pencarian kerja <br> yang dipersonalisasi</p>
                    <button class="btn btn bg-white" style="color: #0064DA; font-weight: bold;">Sign Up ></button>
                </div>

                <div class="col-lg-6 " >
                  <center>
                      <img src="{{ asset('template')}}/assets/img/cheklist.jpeg" height="250px">
                  </center>
              </div>
            </div>
        </div>
    </div>
    </section><!-- End Lowongan Section -->

@include('layout.footer')
