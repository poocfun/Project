@extends('layout_admin.navbar')


@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Lowongan</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
        <div class="card">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
            <div class="container-fluid">
                    <div class="card-body">
                        <div>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left:950px;">
                                Tambah
                            </button>
                        </div>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="bg-primary">
                                    <tr>
                                        <th class="align-middle">#</th>
                                        <th class="align-middle">Judul</th>
                                        <th class="align-middle">Jenis Pekerjaan</th>
                                        <th class="align-middle">Kebutuhan</th>
                                        <th class="align-middle">Nama PT</th>
                                        <th class="align-middle">Deskripsi</th>
                                        <th class="align-middle">Gaji Awal</th>
                                        <th class="align-middle">Gaji Maksimal</th>
                                        <th class="align-middle">Pendidikan</th>
                                        {{-- <th>Benefit</th> --}}
                                        <th class="align-middle">Jenis Kelamin</th>
                                        <th class="align-middle">Usia</th>
                                        <th class="align-middle">Lokasi</th>
                                        <th class="align-middle">Image</th>
                                        {{-- <th>Requirement</th> --}}
                                        <th class="align-middle">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($pekerjaan->count() > 0)
                                        @foreach ($pekerjaan as $row)
                                        <tr>
                                            <td class="align-middle">{{ $loop->iteration }}</td>
                                            <td class="align-middle">{{$row->judul}}</td>
                                            <td class="align-middle">{{$row->jenis_pekerjaan}}</td>
                                            <td class="align-middle">{{$row->kebutuhan }}</td>
                                            <td class="align-middle">{{$row->nama_pt}}</td>
                                            <td class="align-middle">{{$row->deskripsi}} </td>
                                            <td class="align-middle">{{ number_format($row->start_gaji, 0, ',', '.') }}</td>
                                            <td class="align-middle">{{ number_format($row->last_gaji, 0, ',', '.') }}</td>
                                            <td class="align-middle">{{$row->pendidikan}}</td>
                                            {{-- @foreach ($pekerjaan->benefit as $item)
                                                <td class="align-middle">{{$item->benefit}}</td>
                                            @endforeach --}}
                                            <td class="align-middle">{{$row->jeniskelamin}}</td>
                                            <td class="align-middle">{{$row->usia}}</td>
                                            <td class="align-middle">{{$row->lokasi}}</td>
                                            <td class="align-middle">{{asset('storage/pekerjaan/'.$row->image)}}</td>
                                            {{-- @foreach ($pekerjaan->requirement as $item)
                                                <td class="align-middle">{{$item->kualifikasi}}</td>
                                            @endforeach --}}
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('pekerjaan.show', ['id' => $row->id]) }}" type="button" class="btn btn-secondary">Detail</a>
                                                    <a href="{{ route('pekerjaan.edit', ['id' => $row->id]) }}" type="button" class="btn btn-warning">Edit</a>
                                                    <form action="{{ route('pekerjaan.destroy', ['id' => $row->id]) }}" method="POST" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger m-0">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td class="text-center" colspan="14">Data Not Found</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>

@endsection

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Lowongan Pekerjaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="post" action="{{route('post-pekerjaan')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <Label>Judul</Label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="judul" required autofocus>
                                @error('judul')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <Label>jenis pekerjaan</Label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="jenis_pekerjaan" required autofocus>
                                @error('jenis_pekerjaan')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <Label>kebutuhan</Label><span class="text-danger">*</span>
                                <input type="number" class="form-control" name="kebutuhan" required autofocus>
                                @error('kebutuhan')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <Label>Nama PT</Label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="nama_pt" required autofocus>
                                @error('nama_pt')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <Label>Deskripsi</Label>
                                <textarea name="deskripsi" class="form-control" cols="30" rows="4"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="salary">Gaji Awal</label>
                                        <input type="number" class="form-control" id="salary" name="start_gaji" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="salary">Gaji Maksimal</label>
                                        <input type="number" class="form-control" id="salary" name="last_gaji" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="salary">Pendidikan</label>
                                <input type="text" class="form-control" id="text" name="pendidikan" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="float-left">
                                        <button id="tambah-benefit" type="button" class="btn btn-primary">Tambah Benefit</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-center">-- Benefit  --</p>
                                    <div id="benefit-container">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="salary">Jenis Kelamin</label>
                                <input type="text" class="form-control" id="text" name="jeniskelamin" required>
                            </div>
                            <div class="form-group">
                                <label for="salary">Usia</label>
                                <input type="number" class="form-control" id="salary" name="usia" required>
                            </div>
                            <div class="form-group">
                                <label for="location">Lokasi</label>
                                <input type="text" class="form-control" id="location" name="lokasi" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Attachment</label><span
                                    class="text-danger">*optional</span>
                                <br><span class="text-danger">Image,
                                    Pdf, Docx</span>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input"
                                            id="exampleInputFile" multiple
                                            onchange="document.getElementById('file-label').innerHTML = this.value.split('\\').pop()">
                                        <label class="custom-file-label" id="file-label">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="text-center">-- Requirement  --</p>
                            <div id="sub-materi-container"> </div>
                        </div>
                        <div class="float-left">
                            <button id="tambah-sub-materi" type="button" class="btn btn-primary">Tambah Requirement</button>
                        </div>
                    </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
// Ambil elemen tombol "Tambah Sub Materi" dan kontainer form sub materi
const tambahSubMateriBtn = document.getElementById('tambah-sub-materi');
const subMateriContainer = document.getElementById('sub-materi-container');
tambahSubMateriBtn.addEventListener('click', function() {
    const subMateriDiv = document.createElement('div');
    subMateriDiv.innerHTML = `
        <div class="mb-3">
            <label for="">Kualifikasi</label>
            <input class="form-control" type="text" name="kualifikasi[]" autofocus>
        </div>
        <div class="mb-3">
            <label for="">Deskripsi</label>
            <textarea name="deskripsi_kualifikasi[]" class="form-control" id="" cols="30" rows="4"></textarea>
        </div>
    `;
    // Tambahkan elemen div baru ke dalam kontainer form sub materi
    subMateriContainer.appendChild(subMateriDiv);
});
</script>


<script>
// Ambil elemen tombol "Tambah Sub Materi" dan kontainer form sub materi
const tambahBenefit = document.getElementById('tambah-benefit');
const benefitContainer = document.getElementById('benefit-container');
tambahBenefit.addEventListener('click', function() {
    const benefitDiv = document.createElement('div');
    benefitDiv.innerHTML = `
        <div class="mb-3">
            <label for="">Benefit</label>
            <input class="form-control" type="text" name="benefit[]" autofocus>
        </div>
    `;
    // Tambahkan elemen div baru ke dalam kontainer form sub materi
    benefitContainer.appendChild(benefitDiv);
});
</script>

