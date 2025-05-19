@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-maroon">📋 Data Struktur Panitia</h2>
        <a href="{{ route('struktur_panitia.create') }}" class="btn btn-maroon rounded-pill px-4 shadow-sm">
            <i class="fas fa-plus me-1"></i> Tambah Struktur
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle me-1"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
        </div>
    @endif

    <div class="card shadow-sm rounded-4 border-0">
        <div class="card-body p-4">
            <table class="table table-striped align-middle">
                <thead class="text-white" style="background-color: #800000;">
                    <tr>
                        <th>📌 Nama Kegiatan</th>
                        <th>👤 Ketua Panitia</th>
                        <th>⚙️ Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $panitia)
                    <tr>
                        <td>{{ $panitia->nama_kegiatan }}</td>
                        <td>{{ $panitia->ketua_panitia }}</td>
                        <td>
                            <a href="{{ route('struktur_panitia.show', $panitia->id) }}" class="btn btn-sm btn-outline-info me-1">
                                <i class="fas fa-eye"></i> Lihat
                            </a>
                            <a href="{{ route('struktur_panitia.edit', $panitia->id) }}" class="btn btn-sm btn-outline-warning me-1">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('struktur_panitia.destroy', $panitia->id) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Hapus data ini?')">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @if($data->isEmpty())
                    <tr>
                        <td colspan="3" class="text-center text-muted fst-italic">Belum ada data struktur panitia.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .text-maroon { color: #800000; }
    .btn-maroon {
        background-color: #800000;
        color: #fff;
        border: none;
    }
    .btn-maroon:hover {
        background-color: #660000;
        color: #fff;
    }
</style>
@endpush
