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

    <h3 class="mt-4" style="font-weight: bold;">Popular <span></span></h3>
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

        {{-- <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div style="background-color:white; border-radius: 15px;" class="small-box">
          <div class="inner">
            <p class="ml-2" style="color:grey; font-weight:bold;"><img src="data:image/png;base64,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" height="40px" alt=""> Google.co<span class="float-right">
            <i class="far fa-bookmark fa-lg" style="color:black;"></i></span>
          </p>
            <p style="font-weight: bold;" class="ml-2">Product Ehe Te Nandayo!</p>
            <p class="mb-0 text-bold ml-2" style="color:yellow;"><i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>  4.5 <span style="color: grey;"><i style="font-size: 6px;" class="fa fa-circle"></i> Batam</span> </p>
          </div>
            <hr width="80%" class="mt-0">
          <ul>
            <li style="color:grey; font-size:13px; font-weight:bold;">4 Hari yang lalu - 10 pelamar</li><br>
          </ul>
        </div>
    </div>

    </div> --}}

    </div>
    <div class="col-12">
        <h3 style="font-weight: bold;">Lowongan Pekerjaan Tersedia
            <span>

            </span>
        </h3>
        @foreach ($pekerjaan as $row)
            <div class="card">
                <div class="card-body">
                    <div class="card">
                        <div style="background-color: #E0E0E0;" class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('storage/pekerjaan/' . $row->image) }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="col-md-8">
                                    <h2 class="text-bold">{{ $row->judul }}</h2>
                                    <p class="text-bold" style="color: #00000080">
                                        {{ $row->created_at->diffForHumans() }} - {{ $row->kebutuhan }} Pelamar -
                                        Rp.{{ number_format($row->start_gaji, 0, ',', '.') }} -
                                        Rp.{{ number_format($row->last_gaji, 0, ',', '.') }}
                                    </p>
                                    <p class="text-bold" style="color: #00000080">{{ $row->deskripsi }} </p>
                                    <p class="mb-0 text-bold"><i class="fa fa-star 2x" aria-hidden="true"
                                            style="color: yellow;"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> {{ $row->lokasi }}
                                    </p>
                                    <br>
                                    <div class="row">
                                        @foreach ($row->requirement as $item)
                                            <div class="ml-2">
                                                <button style="width: 200px; border-radius:15px; color:#282828;"
                                                    type="button"
                                                    class="btn btn-block btn-secondary px-3 py-2 mt-2 text-bold">{{ $item->kualifikasi }}</button>
                                            </div>
                                        @endforeach


                                        <div class="col-md-12">
                                            <a href="{{ url('monitor/info/' . $row->id) }}"
                                                style="width: 180px; border-radius:15px;" type="button"
                                                class="btn btn-block btn-primary px-3 py-2 mt-5 float-right text-bold">Info
                                                Selengkapnya</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endSection()
