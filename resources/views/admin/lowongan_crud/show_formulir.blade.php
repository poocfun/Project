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
                            <label class="form-label">Pengalaman</label>
                            <input type="text" name="pengalaman" class="form-control" placeholder="Pengalaman"
                                value="{{ $data->pengalaman }}" readonly>
                        </div>
                        <div class="col">
                            <label class="form-label">User</label>
                            <input type="text" name="user_id" class="form-control" placeholder="User"
                                value="{{ $data->user_id }}" readonly>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label class="form-label">Pendidikan</label>
                            <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan"
                                value="{{ $data->pendidikan }}" readonly>
                        </div>
                        <div class="col">
                            <label class="form-label">Dokumen</label>
                            <input type="text" name="dokumen" class="form-control" placeholder="Dokumen"
                                value="{{ $data->dokumen }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
