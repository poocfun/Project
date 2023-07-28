@include('layout.header')

<link href="{{ asset('template')}}/assets/css/main3.css" rel="stylesheet">
  <!-- ======= Home Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
        <div class="row justify-content-between gy-5">
            <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center
                align-items-lg-start text-center text-lg-start">
                <h2 data-aos="fade-up" style="color: #4A4A4A; font-weight:bold; margin-left: 0px; font-size: 70px;">Buat CV Dalam 3 <br> Langkah, Secara <br> Gratis!!!</h2>
                <button type="submit" class="btn btn-primary font-weight-bold" style="height: 38px; margin-left: 50px; background-color:#0075FF; color:#fff;">Lihat Contoh</button>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                <div class="image-container">
                    <img src="{{ asset('template/assets/img/cv1.png') }}" class="img-fluid" alt="">
                    <img src="{{ asset('template/assets/img/cv3.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
  </section><!-- End Home Section -->


  <main id="main">


    {{-- Section Together --}}
    <section id="together" class="together">
        <div class="container">
                <div class="">
                    <h2 style="color:#fff; text-align:center;">3 Tahap mudah buat CV</h2> <br>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 style="color:#0064DA; text-align:center;">Tahap 1</h5><br>
                                    <p style="font-weight: bold; color:#000000; text-align:center; font-size:22px;">Isi Biodata Singkat Anda</p>
                                    <p style="text-align: center; font-weight: inter; color:#5C5C5C;">Secara Otomatis Anda mendapatkan Kartu CV yang mudah dikenali HR/Bos pencari kerja </p>
                                    <img src="{{ asset('template/assets/img/tahap1.jpeg') }}" class="card-img-bottom mt" alt="...">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 style="color:#0064DA; text-align:center;">Tahap 2</h5><br>
                                    <p style="font-weight: bold; color:#000000; text-align:center; font-size:22px;">Lengkapi CV Anda</p>
                                    <p style="text-align: center; font-weight: inter; color:#5C5C5C;">Tambahkan pengalaman kerja, dokumen dan keahlianmu untuk buat CV </p>
                                    <img style="margin-top: 129px" src="{{ asset('template/assets/img/tahap2.jpeg') }}" class="card-img-bottom" alt="...">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 style="color:#0064DA; text-align:center;">Tahap 3</h5><br>
                                    <p style="font-weight: bold; color:#000000; text-align:center; font-size:22px;">Bagikan & unduh CV Anda</p>
                                    <p style="text-align: center; font-weight: inter; color:#5C5C5C;">Dapatkan CV siap dibagikan ke siapa saja via Online. Kamu juga bisa mengunduh lohhhh</p>
                                    <img style="margin-top: 105px" src="{{ asset('template/assets/img/tahap3.jpeg') }}" class="card-img-bottom" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <center>
                        <a href="{{ url('log-in') }}" class="btn btn-block btn-outline-light" style="color: rgb(250, 250, 250); width: 180px;">Buat CV Sekarang -></a>
                    </center>
                </div>
        </div>

    </section>
    {{-- End Together --}}



    {{-- Section Google Maps --}}
    <section id="contact" class="contact" style="background-color: #DEDEDE">
        <div class="container">
            <div>
                <h3>Tunggu apa lagi, ayo buat CV <br> sekarang, ini contohnya!</h3>
                <br>
            </div>

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card"style="background-color: #0064DA; color:#fff; border-radius: 5px;">
                                    <div class="row">
                                        <div class="col-md-6">
                                                <div class="card-body" >
                                                    <p class="mb-0" style="font-weight: bold;">Namanya</p>
                                                    <p class="mt-2 mb-1" style="font-weight: bold;">Umurnya</p>
                                                    <p class="mt-2 mb-1" style="font-weight: bold; font-size:14px">Pengalaman Kerja</p>
                                                    <p class="mt-2 mb-1">Lamanya Kerja</p>
                                                    <p class="mt-2 mb-1"><i class="fa-solid fa-graduation-cap"></i> Sekolah di???</p>
                                                    <p class="mt-2 "><i class="fa-sharp fa-solid fa-location-dot"></i> Asal mana???</p>
                                                </div>
                                        </div>

                                        <div class="col-md-6">
                                            <img class="" src="{{ asset('template/assets/img/cv4.jpg') }}" height="239px" alt="..." style="border-radius:15px">
                                        </div>
                                    </div>

                                    <div class="card-footer" style="color: #0075FF; font-weight: bold; font-size:15px; background-color:#fff;">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <a href="#" style="font-size:13px;" class="text-center">https://KerjaGan.job/CV/Namanya</a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#" style="width: 70px; border-radius:10px;" type="button" class="btn btn-block btn-secondary">Salin</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div>
                                    <h4>Pengalaman Kerja</h4>
                                </div>
                                <div class="timeline">
                                    <!-- timeline item -->
                                    <div>
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                        <div class="timeline-item">
                                            <p class="mb-0" style="font-weight: bold;">Nama PTnya</p>
                                            <p class="mt-0 mb-0" style="font-weight: bold; color:#000000;">Nama Pekerjaannya</p>
                                            <p class="mt-0" style="font-size: 13px; color:#000000;">Maret 2022 - sekarang | 1 tahun 2 bulan</p>
                                        </div>
                                    </div>
                                    <!-- END timeline item -->
                                    <!-- timeline item -->
                                    <div>
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                        <div class="timeline-item">
                                            <p class="mb-0" style="font-weight: bold;">Nama PTnya</p>
                                            <p class="mt-0 mb-0" style="font-weight: bold; color:#000000;">Nama Pekerjaannya</p>
                                            <p class="mt-0" style="font-size: 13px; color:#000000;">Maret 2022 - sekarang | 1 tahun 2 bulan</p>
                                        </div>
                                    </div>
                                    <!-- END timeline item -->
                                    <!-- timeline item -->
                                    <div>
                                      <i class="fas fa-comments bg-gray"></i>
                                        <div class="timeline-item">
                                            <p class="mt-0 mb-0" style="font-weight: bold; color:#000000;">Nama Pekerjaannya</p>
                                                <p class="mt-0" style="font-size: 13px; color:#000000;">Maret 2022 - sekarang | 1 tahun 2 bulan</p>
                                        </div>
                                    </div>
                                    <!-- END timeline item -->
                                    <!-- timeline item -->
                                    <div>
                                        <i class="fas fa-comments bg-gray"></i>
                                        <div class="timeline-item">
                                            <p class="mt-0 mb-0" style="font-weight: bold; color:#000000;">Nama Pekerjaannya</p>
                                            <p class="mt-0" style="font-size: 13px; color:#000000;">Maret 2022 - sekarang | 1 tahun 2 bulan</p>
                                        </div>
                                    </div>
                                    <!-- END timeline item -->
                                    <!-- timeline item -->
                                    <div>
                                        <i class="fas fa-comments bg-gray"></i>
                                        <div class="timeline-item">
                                            <p class="mt-0 mb-0" style="font-weight: bold; color:#000000;">Nama Pekerjaannya</p>
                                            <p class="mt-0" style="font-size: 13px; color:#000000;">Maret 2022 - sekarang | 1 tahun 2 bulan</p>
                                        </div>
                                    </div>
                                    <!-- END timeline item -->
                                    <div>
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                        <div class="timeline-item">
                                            <p class="mb-0" style="font-weight: bold;">Nama PTnya</p>
                                            <p class="mt-0 mb-0" style="font-weight: bold; color:#000000;">Nama Pekerjaannya</p>
                                            <p class="mt-0" style="font-size: 13px; color:#000000;">Maret 2022 - sekarang | 1 tahun 2 bulan</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h4>Pendidikan</h4>
                                </div>
                                <div class="ms-4 input-group">
                                    <i class="fa-sharp fa-solid fa-graduation-cap fa-lg mt-2"></i>
                                    <p class="ms-3 fw-bold">Pendidikan Terakhir???</p>
                                </div>

                            </div>


                            <div class="col-md-4">
                                <div>
                                    <h3>Keahlian</h3>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <button style="width: 110px; border-radius:20px;" type="button" class="btn btn-block btn-secondary mb-2">Keahlian A</button>
                                        </div>
                                        <div class="col-md-4">
                                            <button style="width: 110px; border-radius:20px;" type="button" class="btn btn-block btn-secondary mb-2">Keahlian A</button>
                                        </div>
                                        <div class="col-md-4">
                                            <button style="width: 110px; border-radius:20px;" type="button" class="btn btn-block btn-secondary mb-2">Keahlian A</button>
                                        </div>
                                        <div class="col-md-4">
                                            <button style="width: 110px; border-radius:20px;" type="button" class="btn btn-block btn-secondary mb-2">Keahlian A</button>
                                        </div>
                                        <div class="col-md-4">
                                            <button style="width: 110px; border-radius:20px;" type="button" class="btn btn-block btn-secondary mb-2">Keahlian A</button>
                                        </div>
                                    </div>
                                </div><br><br><br><br>
                                <div>
                                    <h3>Dokumen dan Sertifikat</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button style="width: 110px; border-radius:20px;" type="button" class="btn btn-block btn-secondary mb-2">Surat A</button>
                                        </div>
                                        <div class="col-md-12">
                                            <button style="width: 110px; border-radius:20px;" type="button" class="btn btn-block btn-secondary mb-2">Surat A</button>
                                        </div>
                                        <div class="col-md-12">
                                            <button style="width: 110px; border-radius:20px;" type="button" class="btn btn-block btn-secondary mb-2">Surat A</button>
                                        </div>
                                        <div class="col-md-12">
                                            <button style="width: 110px; border-radius:20px;" type="button" class="btn btn-block btn-secondary mb-2">Surat A</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <center>
                <div>
                    <a href="{{ url('log-in') }}" style="width: 200px; font-weight: bold;" type="button" class="btn btn-block btn-outline-info">Buat CV sekarang -></a>
                </div>
            </center>
        </div>
    </section>
    <!-- End Google Maps -->




      @include('layout.footer')
