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
                <form action="{{ route('update-user', ['id' => $data->id]) }}}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" placeholder=" Name"
                                    value="{{ $data->name }}">
                            </div>
                            <div class="col">
                                <label class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email"
                                    value="{{ $data->email }}">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <label class="form-label">Google ID</label>
                                <input type="text" name="google_id" class="form-control" placeholder="ID"
                                    value="{{ $data->google_id }}">
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
