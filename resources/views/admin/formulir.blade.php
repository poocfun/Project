@extends('layout_admin.navbar')


@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Formulir</h1>
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
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="bg-primary">
                                <tr>
                                    <th class="align-middle">#</th>
                                    <th class="align-middle">Pengalaman Kerja</th>
                                    <th class="align-middle">User</th>
                                    <th class="align-middle">Pendidikan</th>
                                    <th class="align-middle">Dokumen</th>
                                    <th class="align-middle">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $d)
                                    <tr>
                                        <td class="align-middle">{{ $loop->iteration }}</td>
                                        <td class="align-middle">{{ $d->pengalaman }}</td>
                                        <td class="align-middle">{{ $d->user_id }}</td>
                                        <td class="align-middle">{{ $d->pendidikan }}</td>
                                        <td class="align-middle">
                                            @if ($d->dokumen)
                                                @if (Str::endsWith($d->dokumen, '.png') || Str::endsWith($d->dokumen, '.jpg') || Str::endsWith($d->dokumen, '.jpeg'))
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <i class="fa fa-file-image-o"></i>
                                                            <!-- Ganti dengan ikon gambar Anda -->
                                                            <p>Ini adalah dokumen gambar.</p>
                                                            <!-- Tambahkan tampilan gambar di sini jika perlu -->
                                                            <a href="{{ asset('storage/lamar/' . $d->dokumen) }}"
                                                                target="_blank">Buka Gambar</a>

                                                        </div>
                                                    </div>
                                                @elseif(Str::endsWith($d->dokumen, '.pdf'))
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <i class="fa fa-file-pdf-o"></i>
                                                            <!-- Ganti dengan ikon PDF Anda -->
                                                            <p>Ini adalah dokumen PDF.</p>
                                                            <!-- Tambahkan tampilan PDF di sini jika perlu -->
                                                            <a href="{{ asset('storage/lamar/' . $d->dokumen) }}"
                                                                target="_blank">Buka PDF</a>
                                                        </div>
                                                    </div>
                                                @elseif(Str::endsWith($d->dokumen, '.doc') || Str::endsWith($d->dokumen, '.docx'))
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <i class="fa fa-file-word-o"></i>
                                                            <!-- Ganti dengan ikon dokumen Word Anda -->
                                                            <p>Ini adalah dokumen Word.</p>
                                                            <!-- Tambahkan tampilan dokumen Word di sini jika perlu -->
                                                            <a href="{{ asset('storage/lamar/' . $d->dokumen) }}"
                                                                target="_blank">Buka Dokumen Word</a>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <i class="fa fa-file"></i>
                                                            <p>Dokumen tidak dikenali.</p>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                        </td>

                                        <td class="align-middle">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="/show_form/{{ $d->id }}"
                                                    class="btn btn-secondary">Detail</a>
                                                <a href="/delete_form/{{ $d->id }}" class="btn btn-danger">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="14">Data Not Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


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
