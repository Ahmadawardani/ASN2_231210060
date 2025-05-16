@extends('layouts.app')

@section('title', 'Detail Anggota')

@section('content')
<section class="section" id="anggota-detail" style="background-color: #f8f9fc;">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 p-4" style="border-radius: 1.5rem;">
                    <div class="card-body">
                        <h3 class="text-center text-primary fw-bold mb-4">
                            <i class="fas fa-id-card me-2"></i>Detail Anggota
                        </h3>

                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item">
                                <strong class="text-secondary">NIM:</strong> <span class="ms-2">{{ $anggota->nim }}</span>
                            </li>
                            <li class="list-group-item">
                                <strong class="text-secondary">Nama:</strong> <span class="ms-2">{{ $anggota->nama }}</span>
                            </li>
                            <li class="list-group-item">
                                <strong class="text-secondary">Jabatan:</strong> <span class="ms-2">{{ $anggota->jabatan }}</span>
                            </li>
                        </ul>

                        <div class="text-center">
                            <a href="{{ route('anggota.index') }}" class="btn btn-outline-primary rounded-pill px-4">
                                <i class="fas fa-arrow-left me-1"></i> Kembali ke Daftar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    #anggota-detail .list-group-item {
        background-color: transparent;
        border: none;
        font-size: 1.05rem;
        padding-left: 0;
        padding-right: 0;
    }

    #anggota-detail strong {
        min-width: 90px;
        display: inline-block;
    }
</style>
@endsection