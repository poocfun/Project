@extends('layout_admin.navbar')


@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Populer</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
        <div class="card">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="container-fluid">
                <div class="card-body">
                    <div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                            style="margin-left:950px;">
                            Tambah
                        </button>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="bg-primary">
                                <tr>
                                    <th class="align-middle">#</th>
                                    <th class="align-middle">Nama PT</th>
                                    <th class="align-middle">Kebutuhan</th>
                                    <th class="align-middle">Deskripsi</th>
                                    <th class="align-middle">Lokasi</th>
                                    <th class="align-middle">Image</th>
                                    <th class="align-middle">Action</th>
                                </tr>
                            </thead>
                            @if (count($data))
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td class="align-middle">{{ $loop->iteration }}</td>
                                            <td class="align-middle">{{ $item->namapt }}</td>
                                            <td class="align-middle">{{ $item->kebutuhan }}</td>
                                            <td class="align-middle">{{ $item->deskripsi }}</td>
                                            <td class="align-middle">{{ $item->lokasi }}</td>
                                            <td class="align-middle">
                                                <img src="{{ asset('storage/pekerjaan/' . $item->image) }}" alt="Image"
                                                    width="100px">
                                            </td>
                                            <td class="align-middle">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="show_populer/{{ $item->id }}"
                                                        class="btn btn-secondary">Detail</a>
                                                    <a href="update_populer/{{ $item->id }}"
                                                        class="btn btn-warning">Edit</a>
                                                    <a href="delete_populer/{{ $item->id }}"
                                                        class="btn btn-danger">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="text-center" colspan="14">Data Not Found</td>
                                    </tr>
                                </tbody>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Populer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="post" action="insertpopuler/">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <Label>Nama PT</Label><span class="text-danger">*</span>
                                <input type="text" class="form-control" name="namapt" required autofocus>
                                @error('namapt')
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
                                <Label>Deskripsi</Label>
                                <textarea name="deskripsi" class="form-control" cols="30" rows="4"></textarea>
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
