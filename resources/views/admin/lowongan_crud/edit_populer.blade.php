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
                <form action="/procces_update_populer/{{ $data->id }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col">
                                <label class="form-label">Nama PT</label>
                                <input type="text" name="namapt" class="form-control" placeholder=" Name"
                                    value="{{ $data->namapt }}">
                            </div>
                            <div class="col">
                                <label class="form-label">Kebutuhan</label>
                                <input type="text" name="kebutuhan" class="form-control" placeholder=" Kebutuhan"
                                    value="{{ $data->kebutuhan }}">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <label class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" placeholder=" Deskripsi">{{ $data->deskripsi }}</textarea>
                            </div>
                            <div class="col">
                                <label class="form-label">Lokasi</label>
                                <input type="text" name="lokasi" class="form-control" placeholder=" Lokasi"
                                    value="{{ $data->lokasi }}">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <label class="form-label">Gambar</label>
                                <input type="file" name="image" class="form-control" placeholder=" Gambar"
                                    value="{{ $data->image }}">
                            </div>
                            <div class="col">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
