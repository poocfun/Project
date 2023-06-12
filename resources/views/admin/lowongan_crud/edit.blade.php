@extends('layout_admin.navbar')


@section('content')

<div class="section">
    <div class="card mt-5">
        <div class="container">
            <div class="content-header4">
                <div class="container-fluid">
                  <div class="row mb-0">
                    <div class="col-sm-6">
                      <h1 class="m-0">Edit</h1>
                    </div>
                  </div>
                </div>
            </div>
            <form action="{{ url('update-pekerjaan/'.$pekerjaan->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col">
                            <label class="form-label">Judul</label>
                            <input type="text" name="judul" class="form-control" placeholder=" Judul" value="{{$pekerjaan->judul}}" >
                        </div>
                        <div class="col">
                            <label class="form-label">Jenis Pekerjaan</label>
                            <input type="text" name="jenis_pekerjaan" class="form-control" placeholder=" Jenis Pekerjaan" value="{{ $pekerjaan->jenis_pekerjaan }}" >
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label class="form-label">Kebutuhan</label>
                            <input type="text" name="kebutuhan" class="form-control" placeholder=" Kebutuhan" value="{{ $pekerjaan->kebutuhan }}" >
                        </div>
                        <div class="col">
                            <label class="form-label">Nama PT</label>
                            <input type="text" name="nama_pt" class="form-control" placeholder=" Nama PT" value="{{ $pekerjaan->nama_pt }}" >
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label class="form-label">Deskripsi</label>
                            <textarea  name="deskripsi" class="form-control" placeholder=" Deskripsi"  >{{ $pekerjaan->deskripsi }}</textarea>
                        </div>
                        <div class="col">
                            <label class="form-label">Pendidikan</label>
                            <input type="text" name="pendidikan" class="form-control" placeholder=" Pendidikan" value="{{ $pekerjaan->pendidikan }}" >
                        </div>
                    </div>
                    <div class="row mb-2">

                        <div class="col">
                            <label class="form-label">Gaji Awal </label>
                            <input type="number" name="start_gaji" class="form-control" placeholder=" Gaji Awal" value="{{ $pekerjaan->start_gaji }}" >
                        </div>
                        <div class="col">
                            <label class="form-label">Gaji Maksimal</label>
                            <input type="number" name="last_gaji" class="form-control" placeholder=" Gaji Maksimum" value="{{ $pekerjaan->last_gaji }}" >
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label class="form-label">Jenis Kelamin</label>
                            <input type="text" name="jeniskelamin" class="form-control" placeholder=" Jenis Kelamin" value="{{ $pekerjaan->jeniskelamin }}" >
                        </div>
                        <div class="col">
                            <label class="form-label">Usia</label>
                            <input type="number" name="usia" class="form-control" placeholder=" Usia" value="{{ $pekerjaan->usia }}" >
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label class="form-label">Lokasi</label>
                            <input type="text" name="lokasi" class="form-control" placeholder=" Lokasi" value="{{ $pekerjaan->lokasi }}" >
                        </div>
                        <div class="col">
                            <label class="form-label">Gambar</label>
                            <input type="text" name="image" class="form-control" placeholder=" Gambar" value="{{ $pekerjaan->image }}" >
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            @foreach ($pekerjaan->benefit as $item)
                                <label class="form-label">Benefit</label>
                                <input name="benefit[{{ $item->id }}]" type="text" class="form-control" placeholder="Benefit" value="{{ $item->benefit }}">
                            @endforeach
                        </div>

                        <div class="col">
                            <label class="form-label">Requirement</label>
                            @foreach ($pekerjaan->requirement as $item)
                            <input name="requirement_kualifikasi[]" type="text" id="tambah-sub-materi" class="form-control" placeholder="Requirement" value="{{ $item->kualifikasi }}">
                            <input name="requirement_deskripsi[]" type="text" id="tambah-sub-materi" class="form-control" placeholder="Requirement" value="{{ $item->deskripsi }}">
                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
