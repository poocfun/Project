@extends('layout_admin.default')


@section('content')
    <div class="row">
        <div class="col-md-12 mt-0">
            <div class="input-group mb-3 border rounded bg-white" style="width: 1070px;">
                <div class="align-middle d-flex mt-3">
                    <span class="border-0" style="margin-left: 20px;"><i class="fas fa-map-marker-alt"></i></span>
                    <p style="margin-left: 10px; font-weight: 700;">Indonesia, Batam</p>
                </div>
                <div class="align-middle d-flex">
                    <input type="search" class="form-control border-0" style="height: 100%; width: 870px; "
                        placeholder="Cari Lowongan">
                    <span class="border-0" style="margin-top: 15px;"><i class="fa fa-search "></i></span>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="input-group border border-1 rounded-3 shadow  justify-content-center align-middle">
    <i class="fas fa-map-marker-alt"></i>
    <p class="">Indonesia, Batam</p>
    {{-- <input  type="search" class="form-control border-0" placeholder="Cari Lowongan Pekerjaan">
      <i class="fa fa-search" aria-hidden="true"></i>  --}}
    {{-- </div> --}}


    <br>
    <h3 style="font-weight: bold;">Popular</h3>
    <div class="row">
        @foreach ($populer as $item)
            <div class="col-lg-3">
                <!-- small box -->
                <div style="background-color:white; border-radius: 15px;" class="small-box">
                    <div class="inner">
                        <p class="ml-2" style="color: grey; font-weight: bold;">
                            <img src="{{ asset('storage/pekerjaan/' . $item->image) }}" class="rounded-circle"
                                height="40px" alt="">
                            {{ $item->namapt }}
                            <span class="float-right">
                                <i class="far fa-bookmark fa-lg" style="color: black;"></i>
                            </span>
                        </p>

                        <p style="font-weight: bold;" class="ml-2">
                            {{ strlen($item->deskripsi) > 20 ? substr($item->deskripsi, 0, 20) . '...' : $item->deskripsi }}
                        </p>
                        <p class="mb-0 text-bold ml-2" style="color:yellow;"><i class="fa fa-star" aria-hidden="true"
                                style="color: yellow;"></i> 4.5 <span style="color: grey;"><i style="font-size: 6px;"
                                    class="fa fa-circle"></i> {{ $item->lokasi }}</span> </p>
                    </div>
                    <hr width="80%" class="mt-0">
                    <ul>
                        <li style="color:grey; font-size:13px; font-weight:bold;">{{ $item->created_at->diffForHumans() }}
                            -
                            {{ $item->kebutuhan }} pelamar</li><br>
                    </ul>
                </div>
            </div>
        @endforeach



        <div class="col-12">
            <div class="card border rounded shadow">
                <div class="card-body">
                    <a href="{{ url('monitor') }}" style="color: black;"><i class="fas fa-arrow-left"
                            style="font-size:30px;"></i></a>
                    <center>
                        <div class="col-md-12">
                            <button style="width: 220px; height:60px; border-radius:15px; color:#fff; font-size:23px;"
                                type="button" class="btn btn-block btn-primary px-3 py-2 text-bold">Detail
                                Pekerjaan</button>
                        </div>
                    </center><br>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/pekerjaan/' . $pekerjaan->image) }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="col-md-4">
                            <h2 class="text-bold">{{ $pekerjaan->judul }}</h2>
                            <p class="text-bold mb-1" style="color: #00000080">{{ $pekerjaan->nama_pt }}</p>
                            <p class="text-bold mt-0" style="color: #00000080">{{ $pekerjaan->lokasi }}</p>
                            <p class=""><i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                {{ $pekerjaan->jenis_pekerjaan }}</p>
                            <p><i class="fas fa-money-check-alt"></i>
                                Rp.{{ number_format($pekerjaan->start_gaji, 0, ',', '.') }} -
                                Rp.{{ number_format($pekerjaan->last_gaji, 0, ',', '.') }}</p>
                            <p style="color: #3BB800;">Dibutuhkan segera - {{ $pekerjaan->kebutuhan }} orang</p>
                            <div>
                                <h3>Persyaratan Minimum</h3>
                                <dl class="row">
                                    <dt class="col-md-4">Usia</dt>
                                    <dd class="col-md-6">{{ $pekerjaan->usia }}</dd>

                                    <dt class="col-md-4">Pendidikan</dt>
                                    <dd class="col-md-6">{{ $pekerjaan->pendidikan }}</dd>

                                    <dt class="col-md-4">Jenis Kelamin</dt>
                                    <dd class="col-md-6">{{ $pekerjaan->jeniskelamin }}</dd>

                                    <dt class="col-md-4">Lokasi</dt>
                                    <dd class="col-md-6">{{ $pekerjaan->lokasi }}</dd>
                                </dl>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <h2 class="text-bold">Deskripsi Pekerjaan</h2>
                            <ul>
                                <li>{{ $pekerjaan->deskripsi }}</li>
                            </ul>
                            <p class="text-bold">Kualifikasi :</p>
                            <ul>
                                @foreach ($pekerjaan->requirement as $item)
                                    <li>{{ $item->kualifikasi }}</li>
                                @endforeach
                            </ul>
                            <p class="text-bold">Benefit :</p>
                            <ul>
                                @foreach ($pekerjaan->benefit as $item)
                                    <li>{{ $item->benefit }}</li>
                                @endforeach


                            </ul><br>

                            {{-- <div class="col-md-12">
                            <a href="" style="width: 350px; border-radius:15px;" type="button" class="btn btn-block btn-primary float-center text-bold"></a>
                          </div>  --}}
                            <!-- Button trigger modal -->
                            <button style="width: 330px; border-radius:15px;" type="button" class="btn btn-primary"
                                data-toggle="modal" data-target="#exampleModal{{ $pekerjaan->id }}">
                                Lamar Sekarang
                            </button>

                            <!-- Modal -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endSection()

    <div class="modal fade" id="exampleModal{{ $pekerjaan->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><i
                            class="fas fa-arrow-left" style="font-size:30px;"></i></button>
                </div>
                <div class="modal-header">
                    <h1 class="modal-title" style="font-size:25px; font-weight:bold;" id="exampleModalLabel">
                        Persiapkan CV Anda sebelum Melamar</h1>
                </div>
                <div class="modal-body">
                    <div class="card border rounded shadow" style="border-radius: 10px; background-color: #0064DA;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('template/assets/img/cv4.jpg') }}" style="border-radius:10px;"
                                        height="160px" width="130px" alt="">
                                </div>
                                <div class="col-md-8" style="color: #fff;">
                                    <p class="text-bold mb-0">Ini Namanya</p>
                                    <p class=" mt-0 mb-0">20 Tahun</p>
                                    <p class=" mt-0 mb-0">Pengalaman Kerja Belum Diisi</p>
                                    <p class=" mt-0 mb-0">Lama Bekerja Belum Diisi</p>
                                    <p class=" mt-0 mb-0">Sekolah di???</p>
                                    <p class=" mt-0">Asal mana???</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="{{ url('monitor-info/' . $pekerjaan->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <input type="hidden" name="pekerjan_id" value="{{ $pekerjaan->id }}">
                            <div class="col-md-12">
                                <div class="mb-3" style="border-radius:10px;">
                                    <Label>Pengalaman Kerja</Label>
                                    <textarea name="pengalaman" class="form-control" cols="50" rows="3"
                                        placeholder="Belum ada pengalaman Kerja"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="salary">Pendidikan</label>
                                    <input type="text" class="form-control" id="text" name="pendidikan"
                                        required placeholder="Asal SMA/SMK Mana???">
                                </div>
                                <div class="form-group mt-4">
                                    <label for="exampleInputFile" class="mb-0">Dokumen dan Sertifikat</label><span
                                        class="text-danger">*optional</span>
                                    <br><span class="text-danger mt-0">Image,
                                        Pdf, Docx</span>
                                    <div class="input-group mt-1">
                                        <div class="custom-file">
                                            <input type="file" name="dokumen" class="custom-file-input"
                                                id="exampleInputFile" multiple
                                                onchange="document.getElementById('file-label').innerHTML = this.value.split('\\').pop()">
                                            <label class="custom-file-label" id="file-label">+ Tambah Dokumen &
                                                Sertifikat</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="col-md-12">
                                <button style="width: 465px; border-radius:10px;" type="submit"
                                    class="btn btn-primary">Lanjut Lamar</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
