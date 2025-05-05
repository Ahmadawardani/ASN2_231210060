@extends('layouts.app') 
@section('content')
<section class="section" id="anggota-create">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm p-4" style="border-radius: 20px;">
                    <div class="card-body">
                        <h3 class="section-title text-primary mb-4 text-center">Tambah Anggota Baru</h3>

                        <form action="{{ route('anggota.store') }}" method="POST">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="nim" class="form-label">NIM</label>
                                <input type="text" name="nim" id="nim" class="form-control" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control" required>
                            </div>

                            <div class="form-group mb-4">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input type="text" name="jabatan" id="jabatan" class="form-control" required>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('anggota.index') }}" class="btn btn-outline-secondary">← Kembali</a>
                                <button type="submit" class="btn btn-primary">➕ Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection