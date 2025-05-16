@extends('layouts.app')

@section('title', 'Konfirmasi Hapus Anggota')

@section('content')
<section class="section" id="anggota-delete" style="background-color: #fdf5f5;">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-lg p-4" style="border-radius: 1.5rem;">
                    <div class="card-body">
                        <h3 class="text-center text-danger fw-bold mb-4">
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            Konfirmasi Penghapusan Anggota
                        </h3>

                        <p class="text-center text-muted mb-4 fst-italic">Data berikut akan dihapus secara permanen. Tindakan ini tidak dapat dibatalkan.</p>

                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item"><strong>NIM:</strong> {{ $anggota->nim }}</li>
                            <li class="list-group-item"><strong>Nama:</strong> {{ $anggota->nama }}</li>
                            <li class="list-group-item"><strong>Jabatan:</strong> {{ $anggota->jabatan }}</li>
                        </ul>

                        <form action="{{ route('anggota.destroy', $anggota->id) }}" method="POST" class="d-flex justify-content-between align-items-center mt-3">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('anggota.index') }}" class="btn btn-outline-secondary rounded-pill px-4">
                                <i class="fas fa-arrow-left me-1"></i> Batal
                            </a>

                            <button type="submit" class="btn btn-danger rounded-pill px-4">
                                <i class="fas fa-trash-alt me-1"></i> Ya, Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    #anggota-delete .card {
        background: linear-gradient(to bottom right, #fff, #fdf0f0);
    }

    .list-group-item {
        background-color: transparent;
        border: none;
        padding-left: 0;
        font-size: 1rem;
    }

    .list-group-item strong {
        min-width: 90px;
        display: inline-block;
        color: #6b0f1a;
    }
</style>
@endsection