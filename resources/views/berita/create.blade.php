@extends('layouts.app')

@section('content')
<div class="container py-5">
    {{-- Judul & tombol kembali --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold mb-0" style="color:#800000;">📝 Tambah Berita</h2>
        <a href="{{ route('berita.index') }}" class="btn btn-outline-maroon rounded-pill px-4 shadow-sm">
            <i class="fas fa-arrow-left me-1"></i> Kembali
        </a>
    </div>

    {{-- Card Form --}}
    <div class="card border-0 shadow-lg rounded-4" style="background-color:#fff0f0;">
        <div class="card-body p-5">
            <form action="{{ route('berita.store') }}" method="POST" class="needs-validation" novalidate>
                @csrf

                {{-- Nama Berita --}}
                <div class="mb-4">
                    <label class="form-label fw-semibold text-maroon">Nama Berita</label>
                    <input type="text"
                           name="nama_berita"
                           class="form-control shadow-sm rounded-3 @error('nama_berita') is-invalid @enderror"
                           value="{{ old('nama_berita') }}"
                           required>
                    @error('nama_berita')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Deskripsi --}}
                <div class="mb-4">
                    <label class="form-label fw-semibold text-maroon">Deskripsi</label>
                    <textarea name="deskripsi"
                              rows="5"
                              class="form-control shadow-sm rounded-3 @error('deskripsi') is-invalid @enderror"
                              required>{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Tanggal Publikasi --}}
                <div class="mb-4">
                    <label class="form-label fw-semibold text-maroon">Tanggal Publikasi</label>
                    <input type="date"
                           name="tanggal_publikasi"
                           class="form-control shadow-sm rounded-3 @error('tanggal_publikasi') is-invalid @enderror"
                           value="{{ old('tanggal_publikasi') }}"
                           required>
                    @error('tanggal_publikasi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Tombol Simpan --}}
                <button class="btn btn-maroon rounded-pill px-5 py-2 shadow-sm">
                    <i class="fas fa-save me-1"></i> Simpan
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>

    .text-maroon      { color:#800000; }
    .btn-maroon       { background-color:#800000; color:#fff; border:none; }
    .btn-maroon:hover { background-color:#660000; color:#fff; }
    .btn-outline-maroon        { color:#800000; border-color:#800000; }
    .btn-outline-maroon:hover  { background-color:#800000; color:#fff; }

    .needs-validation .form-control:invalid ~ .invalid-feedback {
        display:block;
    }
</style>
@endpush
