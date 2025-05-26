@extends('layouts.app')

@section('content')
<div class="container py-5">
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold" style="color: #800000;">📢 Daftar Berita & Artikel</h2>
        <a href="{{ route('berita.create') }}" class="btn btn-outline-danger rounded-pill px-4 shadow-sm">
            <i class="fas fa-plus me-1"></i> Tambah Berita
        </a>
    </div>

    @forelse ($beritas as $berita)
        <div class="card mb-4 border-0 shadow-sm rounded-4" style="background-color: #fff0f0;">
            <div class="card-body">
                <h4 class="fw-bold text-maroon">{{ $berita->nama_berita }}</h4>
                <p class="text-muted">{{ $berita->deskripsi }}</p>
                <small class="text-secondary">
                    <i class="fas fa-calendar-alt me-1"></i> Dipublikasikan: {{ $berita->tanggal_publikasi }}
                </small>
                <div class="mt-3">
                    <a href="{{ route('berita.show', $berita->id) }}" class="btn btn-sm btn-outline-maroon rounded-pill me-2">
                        <i class="fas fa-eye me-1"></i> Lihat
                    </a>
                    <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-sm btn-outline-warning rounded-pill me-2">
                        <i class="fas fa-edit me-1"></i> Edit
                    </a>
                    <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-outline-danger rounded-pill" onclick="return confirm('Yakin ingin menghapus berita ini?')">
                            <i class="fas fa-trash-alt me-1"></i> Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @empty
        <div class="alert alert-warning text-center">
            Belum ada berita yang ditambahkan.
        </div>
    @endforelse
</div>
@endsection

@push('styles')
<style>
    .text-maroon {
        color: #800000;
    }
    .btn-outline-maroon {
        border-color: #800000;
        color: #800000;
    }
    .btn-outline-maroon:hover {
        background-color: #800000;
        color: white;
    }
</style>
@endpush
