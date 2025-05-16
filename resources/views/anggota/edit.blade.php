@extends('layouts.app')

@section('title', 'Edit Anggota')

@section('content')
<section class="section" id="anggota-edit" style="background-color: #f8f9fc;">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 p-4" style="border-radius: 1.5rem;">
                    <div class="card-body">
                        <h3 class="text-center text-primary fw-bold mb-4">
                            <i class="fas fa-pencil-alt me-2"></i>Edit Data Anggota
                        </h3>

                        <form action="{{ route('anggota.update', $anggota->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label for="nim" class="form-label">NIM</label>
                                <input type="text" name="nim" id="nim" value="{{ $anggota->nim }}" class="form-control" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" id="nama" value="{{ $anggota->nama }}" class="form-control" required>
                            </div>

                            <div class="form-group mb-4">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input type="text" name="jabatan" id="jabatan" value="{{ $anggota->jabatan }}" class="form-control" required>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('anggota.index') }}" class="btn btn-outline-secondary rounded-pill px-4">
                                    <i class="fas fa-arrow-left me-1"></i> Kembali
                                </a>
                                <button type="submit" class="btn btn-primary rounded-pill px-4">
                                    💾 Simpan Perubahan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    #anggota-edit .form-control {
        border-radius: 0.5rem;
    }

    #anggota-edit .form-label {
        font-size: 1.1rem;
        font-weight: 500;
    }

    #anggota-edit .btn-outline-secondary {
        font-size: 1rem;
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }

    #anggota-edit .btn-primary {
        font-size: 1rem;
        padding-left: 2rem;
        padding-right: 2rem;
    }
</style>
@endsection