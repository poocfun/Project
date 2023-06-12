@extends('layout_admin.default')


@section('content')
    <div class="row">
        <div class="col-md-9 mt-5">
            <div class="input-group mb-3 border rounded bg-white" style="width: 800px;">
                <div class="align-middle d-flex mt-3">
                    <span class="border-0" style="margin-left: 20px;"><i class="fas fa-map-marker-alt"></i></span>
                    <p style="margin-left: 10px; font-weight: 700;">Indonesia, Batam</p>
                </div>
                <div class="align-middle d-flex">
                    <input type="search" class="form-control border-0" style="height: 100%; width: 600px; "
                        placeholder="Cari Lowongan">
                    <span class="border-0" style="margin-top: 15px;"><i class="fa fa-search "></i></span>
                </div>
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

    {{-- <div class="input-group border border-1 rounded-3 shadow  justify-content-center align-middle">
    <i class="fas fa-map-marker-alt"></i>
    <p class="">Indonesia, Batam</p>
    {{-- <input  type="search" class="form-control border-0" placeholder="Cari Lowongan Pekerjaan">
      <i class="fa fa-search" aria-hidden="true"></i>  --}}
    {{-- </div> --}}

    <div class="card-tools mt-3">
        <ul class="pagination pagination-sm float-right">
            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
        </ul>
    </div>
    <br>
    <h3 style="font-weight: bold;">Popular</h3>
    <div class="row">

        <div class="col-lg-3">
            <!-- small box -->
            <div style="background-color:white; border-radius: 15px;" class="small-box">
                <div class="inner">
                    <p class="ml-2" style="color:grey; font-weight:bold;"><img
                            src="data:image/png;base64,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"
                            height="40px" alt=""> Google.co<span class="float-right">
                            <i class="far fa-bookmark fa-lg" style="color:black;"></i></span>
                    </p>
                    <p style="font-weight: bold;" class="ml-2">Product Ehe Te Nandayo!</p>
                    <p class="mb-0 text-bold ml-2" style="color:yellow;"><i class="fa fa-star" aria-hidden="true"
                            style="color: yellow;"></i> 4.5 <span style="color: grey;"><i style="font-size: 6px;"
                                class="fa fa-circle"></i> Batam</span> </p>
                </div>
                <hr width="80%" class="mt-0">
                <ul>
                    <li style="color:grey; font-size:13px; font-weight:bold;">4 Hari yang lalu - 10 pelamar</li><br>
                </ul>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div style="background-color:white; border-radius: 15px;" class="small-box">
                <div class="inner">
                    <p class="ml-2" style="color:grey; font-weight:bold;"><img
                            src="data:image/png;base64,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"
                            height="40px" alt=""> Google.co<span class="float-right">
                            <i class="far fa-bookmark fa-lg" style="color:black;"></i></span>
                    </p>
                    <p style="font-weight: bold;" class="ml-2">Product Ehe Te Nandayo!</p>
                    <p class="mb-0 text-bold ml-2" style="color:yellow;"><i class="fa fa-star" aria-hidden="true"
                            style="color: yellow;"></i> 4.5 <span style="color: grey;"><i style="font-size: 6px;"
                                class="fa fa-circle"></i> Batam</span> </p>
                </div>
                <hr width="80%" class="mt-0">
                <ul>
                    <li style="color:grey; font-size:13px; font-weight:bold;">4 Hari yang lalu - 10 pelamar</li><br>
                </ul>
            </div>
        </div>


        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div style="background-color:white; border-radius: 15px;" class="small-box">
                <div class="inner">
                    <p class="ml-2" style="color:grey; font-weight:bold;"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAABTVBMVEX////qQzU0qFNChfT7vAU9g/RsnvY3gPScu/mtxvr7uAD7ugDqQTPqPi/pMyH/vQAgo0b8wQAvfPP1qKItpk7pNSTpOSnpLhr98fD2urb//vn+7MP94aEeo0U0qUz1saztZFr4yMXxiIHvdWzpOTf81n1lmfbP3vz1+f5kuXlCrl9yv4VDg/vc7+H/+fjsWk/85uTwgXnrUkb73Nr8x0D8y1H++OT92or7wCL803L7wzH/+uz+8tX8zl/+6Lb94qHA1PvRtx6c0amGyJay27zs9+88lbVAieLV69rxjYbznpf50s/ta2HvenLrVUn2t7Pua1PuZyrygSL2nhXtWC7wdCb0kRv5rg3sTzHwd1Hi6/2Cq/hSjvV9uWWnsjJ7rkDiuRS8tSiRsDlhrEeiwPlntWjG4do1oHg/jdY5nYyLsfg2pGo+kcQ7maPA4sgHNSQJAAAIAklEQVR4nO2b/XfSVhjHQ6RiSxLSNoQXpS0wbQFLgfpSp6uVl4222O7dbXabU+s2t/H//7gECg2QXG6S+yQXz/M5Rz0ePUk+Pvc+35t7oyAgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIKwppqu7Z/mM5ub65ubmXx+v5auhv1I7Eifbh739iJ6UlGUpMng18hZr76er4X9cL6pZeoNXUnqsiRJESvG72XZ+JNIcX0/7If0TDV/3Egp8pTaFJKcTMn1TDrsh3VPNV+IpHSinMVS0YsLJlk7aSiUemPJSGFxhutpkbZ6E5J6ai8f9qNTkd9Kya71hsipswz3IZLfUrz6DRyVs0zYCkT2/fmZSMrWadgajqTrnsfnRB1TdU776qakM/Az0aXzsGVsqPUU9/3TCUkpclfG8ySLAXqNrvOVHNV6il0Bh0ipk7CtLOw3WM1AK0qPm5Ga19mO0BF6g5N13AnzETpCVriYjIUUkF/EnIybYesJwksFTjASCb/dVHtJQD8ptR664BZEEx2jhC4o9EAFw6+g8BJyiPIgWIBsMhIHQ/QEMCa4mIN5UEEOhui+680mcw9YlnXzp+n9YR4Fqw03a1FJ1pNJqbFVrBeOC/Xi1llEN/fBHf86B0NUqNPnhLnhu3Wc2be+KaT38yc92WlPlYMKChnqSSglleK5/QFMOl/Q7XaueBCsJSknoaw0NklvedXM3rQjB0s1gx7dJJSV3vzXn9PipCMPc1A4p4p6Sdmie707tW5icVHBdIRmjOoK/Zbg+biMXAhS9VFJeelmlyVdHJSRi5gwsp6ij8qy2+OHdbN58VFBmjajN9wf0J8mZU4E8/PbTLLn5YyspvMhKHw9t4RKwduVOTk6PFz55jOyYOo47Gf0x4Po6rdERWXBBW+vRKOr3xHyMOlxiHLDw3jUUHz1vVMZ9V7YT+iTR0YJB/xgryhFOGkXnnk8Mlz90U5RSnFyluKZ7EE8OlJ89dOso8LBMYM/bo9KaCrOxoZcDPsBffMkHrUwHRuSvvAfU2ajE4bTsZHkZNXlA+sgvRqpltiQImE/n3/uThtOxIbC9/daVBzEZw3HsSHvhf14/nlkU8Lr2PgUSnjH1jC6GjdjQ2os+mpGmM6KqdjQQz9xZ4DdNBzHhrLwWWhMQ0dBMzZ+DvvxGDCThlbizymvcnTvpk/u/QJl6NBohqw8orzK8tqST9aOoAwdG41ZwgPaqyzHbvgk9h7K8CHJ8G6Ahq+BBLOfEwxXDoMzXLoHZPiUMAujK88CNLzYgTEkhUU0+jQ4wxtLQIbPCK00/iAboGEMKC5IcRj/gvoyDAzXgAwPSYZPAjXchjEkBf7K40ANj2AMn5MMaddsi2t4J1DDZTREQw+Gwc5DIEOOeimQIUd5CGTI0ZrmCMaQn3UplCE/7xZQqzZu3g/BDLl5xwd7e+JmnwbsDZibvbYbULsYrPZL+d2JIu95U6/bltdiNJAMb0IZkuIiEf2V8irbt2j4uORsGPsIZUg4e0q80NQOy1ttE4oItWgTnFtNPPGbKKpNlrcizVaoOBQcW00i+rtoUKZeuFHwmjBKl8DOnhzO8RNvNkxBUW2zu9MOqdFcsLvPDHYTMfGHOEQrs7vR9hrBEOpgxmT2e5pE4q04ItdndqPXhGkYg2s0NomYOHgnWmB1nx1CCSEbzex3bUZIWAWZtdNlkmGM0U3smciLQUhMoDHKRIIf4IpmgHWYXoXEhGGJyV2IS1fAvDexfCM8CokJmCTGzgUhDMEOnkaMv/Meh8Qkua7/e3wkLrvBXiyuuAr9RPStraCoib5XNqQshPwQY8TgRT/x5p29IIupSByjcDsYY8xek3jh5GdOxYq/G5DCPoBBavBgNiSmpmLLz+XfE8codCcdcDgbEgwVj8iCcJtQVi61OYai6llxniDY51AT9NV5hqJa8tZRiau1wSAF7zMDSnOLaLxJ7Xq48K15gsArtjG7ubmGoqa5Xt3s3JwnCPtaYaUyf5yaqeFuGf5hae5GahBRMaRDIWiU0c0itVPJ/XkxTzGwEgpCm6aIRmxcUr71d5qaJm6U/7rPxSwcQNFshmUsUTh2muLgX0zb+JKoGFAjvXoouiKajuUmeT52K+r4n2vj7yXnRSngVrcdbYp+eoWaK7UdJDv9lpizDoeNf75yLmMQyxkLVP10XEj1stXuWjWznW67VdJy06N9Q/zXQRHuC30HsmW6qTiSNCzFcqlUabValUqpXDZ+r9leYeO/+3YjNRZkmxmy68pw5DmC8Jc27GMj4DFq0qefiu6wi40Ao9BCE0pxNjbWboUhKAgtF93GHVOxEcIkvMJNQ3WpaI0NsP9gQUEJTFHTrmMD8MCQQtFDR6VkHBvhdJlrRbAqjmIj8KifBm4uDmMjFrag0VGhQmMQG6FX0AQsFw3F3Iew7Qb0iaswP4Kilw0tCHbdLcNpUUtMv0LyRbYCMFJzPk9AGNNWGZfR1UZWIHTYJqPqaU8ZmDa7hqOx/UqOGZ3KzK6EN3IlDgs4pFti4KiK7D6uAqB/6dNRFZssP3KEoO+njoYfPxnojNexquXKbd7rN6LTLLvNR03VKgw+xgmQ6e3seXqOG+Mck+22yrn5lpqa0yr9xdO7otOulFVze9tGVDM3wrVypc1t+NEyOKIom6cXVrTyZWXqMGPB6XR2u/12u900fvT73d3OJ+SGIAiCIAiCIAiCIAiCIAiCIAiCIAiCIAiCIAg3/A8UnBCQqdPqZAAAAABJRU5ErkJggg=="
                            height="40px" alt=""> Google.co<span class="float-right">
                            <i class="far fa-bookmark fa-lg" style="color:black;"></i></span>
                    </p>
                    <p style="font-weight: bold;" class="ml-2">Product Ehe Te Nandayo!</p>
                    <p class="mb-0 text-bold ml-2" style="color:yellow;"><i class="fa fa-star" aria-hidden="true"
                            style="color: yellow;"></i> 4.5 <span style="color: grey;"><i style="font-size: 6px;"
                                class="fa fa-circle"></i> Batam</span> </p>
                </div>
                <hr width="80%" class="mt-0">
                <ul>
                    <li style="color:grey; font-size:13px; font-weight:bold;">4 Hari yang lalu - 10 pelamar</li><br>
                </ul>
            </div>
        </div>


        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div style="background-color:white; border-radius: 15px;" class="small-box">
                <div class="inner">
                    <p class="ml-2" style="color:grey; font-weight:bold;"><img
                            src="data:image/png;base64,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"
                            height="40px" alt=""> Google.co<span class="float-right">
                            <i class="far fa-bookmark fa-lg" style="color:black;"></i></span>
                    </p>
                    <p style="font-weight: bold;" class="ml-2">Product Ehe Te Nandayo!</p>
                    <p class="mb-0 text-bold ml-2" style="color:yellow;"><i class="fa fa-star" aria-hidden="true"
                            style="color: yellow;"></i> 4.5 <span style="color: grey;"><i style="font-size: 6px;"
                                class="fa fa-circle"></i> Batam</span> </p>
                </div>
                <hr width="80%" class="mt-0">
                <ul>
                    <li style="color:grey; font-size:13px; font-weight:bold;">4 Hari yang lalu - 10 pelamar</li><br>
                </ul>
            </div>
        </div>

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
                            <img src="{{asset('storage/pekerjaan/'.$pekerjaan->image)}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-4">
                            <h2 class="text-bold">{{$pekerjaan->judul}}</h2>
                            <p class="text-bold mb-1" style="color: #00000080">{{$pekerjaan->nama_pt}}</p>
                            <p class="text-bold mt-0" style="color: #00000080">{{$pekerjaan->lokasi}}</p>
                            <p class=""><i class="fa fa-shopping-bag" aria-hidden="true"></i> {{$pekerjaan->jenis_pekerjaan}}</p>
                            <p><i class="fas fa-money-check-alt"></i> Rp.{{ number_format($pekerjaan->start_gaji, 0, ',', '.') }} - Rp.{{ number_format($pekerjaan->last_gaji, 0, ',', '.') }}</p>
                            <p style="color: #3BB800;">Dibutuhkan segera - {{ $pekerjaan->kebutuhan }} orang</p>
                            <div>
                                <h3>Persyaratan Minimum</h3>
                                <dl class="row">
                                    <dt class="col-md-4">Usia</dt>
                                    <dd class="col-md-6">{{$pekerjaan->usia}}</dd>

                                    <dt class="col-md-4">Pendidikan</dt>
                                    <dd class="col-md-6">{{$pekerjaan->pendidikan}}</dd>

                                    <dt class="col-md-4">Jenis Kelamin</dt>
                                    <dd class="col-md-6">{{$pekerjaan->jeniskelamin}}</dd>

                                    <dt class="col-md-4">Lokasi</dt>
                                    <dd class="col-md-6">{{$pekerjaan->lokasi}}</dd>
                                </dl>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <h2 class="text-bold">Deskripsi Pekerjaan</h2>
                            <ul>
                                <li>{{$pekerjaan->deskripsi}}</li>
                            </ul>
                            <p class="text-bold">Kualifikasi :</p>
                            <ul>
                                @foreach ($pekerjaan->requirement as $item)
                                <li>{{$item->kualifikasi}}</li>
                                @endforeach
                            </ul>
                            <p class="text-bold">Benefit :</p>
                            <ul>
                                @foreach ($pekerjaan->benefit as $item)
                                <li>{{$item->benefit}}</li>
                                @endforeach


                            </ul><br>

                            {{-- <div class="col-md-12">
                            <a href="" style="width: 350px; border-radius:15px;" type="button" class="btn btn-block btn-primary float-center text-bold"></a>
                          </div>  --}}
                            <!-- Button trigger modal -->
                            <button style="width: 330px; border-radius:15px;" type="button" class="btn btn-primary"
                                data-toggle="modal" data-target="#exampleModal{{$pekerjaan->id}}">
                                Lamar Sekarang
                            </button>

                            <!-- Modal -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endSection()

    <div class="modal fade" id="exampleModal{{$pekerjaan->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
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

                    <form action="{{ url('monitor-info/'.$pekerjaan->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <input type="hidden" name="pekerjan_id" value="{{$pekerjaan->id}}">
                            <div class="col-md-12">
                                <div class="mb-3" style="border-radius:10px;">
                                    <Label>Pengalaman Kerja</Label>
                                    <textarea name="pengalaman" class="form-control" cols="50" rows="3" placeholder="Belum ada pengalaman Kerja"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="salary">Pendidikan</label>
                                    <input type="text" class="form-control" id="text" name="pendidikan" required placeholder="Asal SMA/SMK Mana???" >
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
                                            <label class="custom-file-label" id="file-label">+ Tambah Dokumen & Sertifikat</label>
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
