@extends('layout_admin.default')


@section('content')

<div class="row">
    <div class="col-9">
        <div class="row">
            <div class="col-12">
              <!-- Custom Tabs -->
              <div class="card" style="border-radius:15px;">
                <div class="card-header  p-0">
                  <ul class="nav nav-pills p-2" style="margin-left: 260px">
                    <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Proses Seleksi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Hasil Seleksi</a></li>
                  </ul>
                </div><!-- /.card-header -->

                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <div class="row">
                            <div class="ml-2">
                                <td>
                                    <button style="width: 150px; border-radius:15px; font-size:15px;" type="button" class="btn btn-block btn-outline-primary text-bold">Semua</button>
                                </td>
                            </div>
                            <div class="ml-2">
                                <td>
                                    <button style="width: 150px; border-radius:15px; font-size:15px;" type="button" class="btn btn-block btn-outline-primary text-bold">Direview</button>
                                </td>
                            </div>
                            <div class="ml-2">
                                <td>
                                    <button style="width: 150px; border-radius:15px; font-size:15px;" type="button" class="btn btn-block btn-outline-primary text-bold">Terseleksi</button>
                                </td>
                            </div>
                            <div class="ml-2">
                                <td>
                                    <button style="width: 180px; border-radius:15px; font-size:15px;" type="button" class="btn btn-block btn-outline-primary text-bold">Di Undang wawancara</button>
                                </td>
                            </div>
                        </div><br>
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body" style="background-color: #E0E0E0; border-radius: 15px;">
                                <p style="font-size:20px; color:#5C5C5C;" class="">
                                    <i class="fas fa-exclamation-circle ml-3"></i> Lihat Arti dari setiap status lamaranmu
                                    <a href="#" style="color:#0064DA">di sini.</a>
                                </p>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body border rounded shadow">
                              <div class="accordion">
                                <div class="accordion-item">
                                  <div class="accordion-header">
                                    <img src="https://pintarnya.com/kerja/_next/image?url=https%3A%2F%2Fstorage.googleapis.com%2Fpintarnya-kerja-assets%2Fimages%2Femployer%2FPT__Pelangi_Fortuna_Global_1671520207.png&w=256&q=75" style="height: 75px" alt="Image for Accordion Item 1">
                                    <h3 style="color:#0064DA">UI Designer <span style="margin-left:362px;"> <i class="fas fa-arrow-down"></i></span></h3>

                                  </div>
                                  <div class="accordion-content ml-4">
                                    <p><i class="fas fa-shield-check"></i>PT Pelangi Fortuna Global</p>
                                    <p>Batu Aji, Kota Batam</p>
                                    <p><i class="fa fa-graduation-cap" aria-hidden="true"></i> SMA/SMK/D3/D4/S1</p>
                                    <p><i class="fa fa-shopping-bag" aria-hidden="true"></i> Penuh Waktu, On site</p>
                                    <p><i class="fas fa-money-check-alt"></i> Rp. 3.800.000 - Rp. 4.000.000 </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2">
                      The European languages are members of the same family. Their separate existence is a myth.
                      For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                      in their grammar, their pronunciation and their most common words. Everyone realizes why a
                      new common language would be desirable: one could refuse to pay expensive translators. To
                      achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                      words. If several languages coalesce, the grammar of the resulting language is more simple
                      and regular than that of the individual languages.
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- ./card -->
            </div>
            <!-- /.col -->
          </div>
        </div>

        <div class="col-md-3">
          <div class="border rounded shadow">
            <div class="p-4  ">
              <div class="border-bottom d-flex">
                <img src="" alt="" class="rounded-circle" style="width: 40px; height:40px;">
                <div style="line-height: 10px; margin-left: 25px;">
                  <p class="mb-1 text-bold" style="">Username</p>
                  <p class="mt-3">Web Developer</p>
                </div>
              </div>
              <div class="mt-3">
                <ul style="font-family:inter; color:grey;  font-size:13px">
                  <li class="mb-1">10 Project Dibuat</li>
                  <li class="mt-1">10 Skill Yang Dimiliki</li>
                </ul>
              </div>
              <div class="mt-2 d-flex justify-content-center ">
                <button class="btn btn-secondary">Edit Profil</button>
              </div>
            </div>
          </div>
        </div>
</div>


<style>
  .accordion-item {
  border: 1px solid #ccc;
  margin-bottom: 10px;
}

.accordion-header {
  display: flex;
  align-items: center;
  padding: 10px;
  cursor: pointer;
  background-color: #f2f2f2;
}

.accordion-header:hover {
  background-color: #e0e0e0;
}

.accordion-content {
  display: none;
  padding: 10px;
}

.accordion-item.active .accordion-content {
  display: block;
}

</style>

<script>
const accordionItems = document.querySelectorAll('.accordion-item');

accordionItems.forEach(item => {
  const header = item.querySelector('.accordion-header');

  header.addEventListener('click', () => {
    item.classList.toggle('active');

    const content = item.querySelector('.accordion-content');
    if (item.classList.contains('active')) {
      content.style.display = 'block';
    } else {
      content.style.display = 'none';
    }
  });
});
</script>


@endSection()
