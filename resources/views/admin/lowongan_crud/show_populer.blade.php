@extends('layout_admin.navbar')


@section('content')
    <div class="section">
        <div class="card mt-5">
            <div class="container">
                <div class="content-header4">
                    <div class="container-fluid">
                        <div class="row mb-0">
                            <div class="col-sm-6">
                                <h1 class="m-0">Detail</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col">
                            <label class="form-label">Kebutuhan</label>
                            <input type="text" name="kebutuhan" class="form-control" placeholder=" Kebutuhan"
                                value="{{ $data->kebutuhan }}" readonly>
                        </div>
                        <div class="col">
                            <label class="form-label">Nama PT</label>
                            <input type="text" name="nama_pt" class="form-control" placeholder=" Nama PT"
                                value="{{ $data->namapt }}" readonly>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" placeholder=" Deskripsi" value="" readonly>{{ $data->deskripsi }}</textarea>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label class="form-label">Lokasi</label>
                            <input type="text" name="lokasi" class="form-control" placeholder=" Lokasi"
                                value="{{ $data->lokasi }}" readonly>
                        </div>
                        <div class="col">
                            <label class="form-label">Gambar</label>
                            <input type="text" name="image" class="form-control" placeholder=" Gambar"
                                value="{{ $data->image }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
