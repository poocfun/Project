@include('layout.header')

<link href="{{ asset('template')}}/assets/css/main2.css" rel="stylesheet">
  <!-- ======= Home Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center
        align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up" style="color: #fff">Kami membangun jembatan <br> antara
            <span style="color: #C0C0C0">Perusahaan dan <br> Seorang Pelamar Pekerjaan</span> </h2>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
            <p data-aos="fade-up" data-aos-delay="100">Untuk Membangun situs web dan aplikasi yang <br> memberi tim
                yang berhadapan dengan pelanggan <br> di bisnis kecil dan menengah kemampuan untuk <br> menciptakan
                hubungan yang bermanfaat dan <br> bertahan lama dengan pengguna</p>
        </div>
      </div>
      <br>
    </div>
  </section><!-- End Home Section -->



  <main id="main">


    {{-- Section Gambar --}}
    <section id="gambar" class="gambar">
        <div class="col-mb-12">
            <img src="{{ asset('template')}}/assets/img/tentang.jpeg" class="img-fluid"  alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
    </section>
    {{-- End Gambar --}}




    {{-- Section Together --}}
    <section id="together" class="together">
        <div class="container">
            <hr style="height: 5px; color: white; margin:20px;">
            <div class="col-12">
                <div class="row justify-content-between gy-5">
                    <div class="col-lg-7 order-2 order-lg-1  align-items-lg-start text-center text-lg-start">
                        <h2 data-aos="fade-up" style="color: #fff; font-size:60px;">Together We <br> Are Strong</h2>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                        <p data-aos="fade-up" data-aos-delay="100">Produk kami semakin berkembang, namun kami semua bekerja menuju satu tujuan:
                            membuat aplikasi dan situs web sukses, yang tidak hanya mungkin tetapi juga tidak dapat dihindari untuk produk mana pun,
                            kapan pun, dan di mana pun.</p>
                        <p data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi.
                            Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris.
                            Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu.
                            Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales.
                            Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros,
                            eget tempus orci facilisis id.</p>
                    </div>
                </div>
            </div>
        <br>


        <div class="col-12">
            <div class="row">
              <div class="col-md-6" data-aos-delay="200">
                <div style="text-align: center;">
                  <img src="{{ asset('template/assets/img/jas.jpeg') }}" alt="Founder &amp; CEO" style="height: 350px;"><br><br>
                  <h2 style="color: #fff;">Founder &amp; CEO</h2>
                </div>
              </div>

              <div class="col-md-1"></div>
              <div class="col-md-5">
                <div class="">
                  <h2 style="color: #fff; white-space: pre-line;">"Tujuan kami adalah <br> untuk Membuat aplikasi <br> dan Website
                     KerjaGan <br> untuk Jembatani antara <br> perusahaan dengan <br> pelamar kerja yang <br> sesuai dibutuhkan oleh <br> perusahaan."</h2>
                </div>
              </div>
            </div>
        </div>

        <hr style="height: 5px; color: white;">
        <div class="row">
            <div class="col-md-4 text-center" style="margin-bottom: 30px;">
                <p style="margin-bottom: 10px; font-size: 16px;">Hampir tiap harinya lowongan pekerjaan <br> baru sebanyak</p>
                <h1 style="color: #fff; font-size: 48px; margin-bottom: 0;">100+</h1>
            </div>

            <div class="col-md-4 text-center" style="margin-bottom: 30px;">
                <p style="margin-bottom: 10px; font-size: 16px;">Perusahaan se Indonesia sudah terdaftar <br> di KerjaGan sebanyak</p>
                <h1 style="color:#fff;">1K+</h1>
            </div>

            <div class="col-md-4 text-center" style="margin-bottom: 30px;">
                <p style="margin-bottom: 10px; font-size: 16px;">Pelamar yang telah  diterima <br> kerja sebanyak</p>
                <h1 style="color:#fff;">5K+</h1>
            </div>
        </div>

    </div>

    </section>
    {{-- End Together --}}



    {{-- Section Google Maps --}}
    <section id="contact" class="contact" style="background-color: #DEDEDE">
        <div class="container">
            <div class="">
                <h2 style="font-weight:bold; color:#000000;">Our Address <br> KerjaGan</h2>
            </div>

            <div class="map">
                <hr style="height: 5px; color:#000000;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
                <br><br>
                <p style="font-weight:bold; text-align:center; color:#4E4E4E;">Jl. Amarilis IV No.7, Jombang, Kec. Ciputat, Kota Tangerang Selatan, Banten 15414</p>
            </div>
        </div>
    </section>
    <!-- End Google Maps -->




    <!-- ======= Punya Pertayaan Section ======= -->
    <section id="onfocus" class="onfocus" style="background-color: #000C4A;">
        <div class="container">
            <div class="row justify-content-between gy-5">
                <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <h2 data-aos="fade-up" style="color: #fff; font-size: 50px;">Punya Pertanyaan?</h2>
                    <h2 data-aos="fade-up" style="color: #fff; font-size: 50px;">Tim kami dengan <br> senang hati <br> membantu Anda</h2>
                    <p data-aos="fade-up" data-aos-delay="100" style="color:#fff; font-size: 13px;">Tanya Tentang Produk KerjaGan, atau <br> yang lainnya.
                         Perwakilan kami yang <br> sangat terlatih siap siaga. Bantuan siap.</p><br>
                    <hr>
                    <button class="btn btn bg-secondary" style="font-weight: bold;">Kontak Kami ></button><span style="color: #fff">Or call +62 821 2314 0294</span>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                    <img src="{{ asset('template')}}/assets/img/punya.jpeg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300" style="height: 400px;">
                </div>
            </div>
        </div>
    </section> <!-- End Punya Pertayaan Section -->




      @include('layout.footer')
