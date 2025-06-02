@extends('layouts.app')

@section('title', 'Daftar Anggota')

@section('content')
<section class="section" id="anggota" style="background-color: #fdfcfc;">
    <div class="container py-5">
        @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
        <div class="row justify-content-center mb-4">
            <div class="col-lg-10 text-center">
                <h2 class="section-title text-uppercase fw-bold" style="color: #6b0f1a;">Daftar Anggota HMPS - Sistem Informasi</h2>
                <p class="text-muted fst-italic">Berikut adalah daftar anggota aktif beserta jabatan mereka dalam organisasi.</p>
                <p class="fw-bold text-dark">Total Anggota Aktif: {{ $totalAnggota }}</p>
                <a href="{{ route('anggota.create') }}" class="btn btn-maroon mt-3 shadow-sm rounded-pill px-4 py-2">
                    <i class="fas fa-user-plus me-1"></i> Tambah Anggota
                </a>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="table-responsive rounded-4 shadow-lg overflow-hidden">
                    <table class="table table-hover table-bordered bg-white mb-0" style="border-left: 4px solid #6b0f1a;">
                        <thead style="background-color: #6b0f1a; color: white;">
                            <tr class="text-center text-uppercase">
                                <th scope="col">NIM</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse ($anggota as $item)
                            <tr>
                                <td class="align-middle">{{ $item->nim }}</td>
                                <td class="align-middle">{{ $item->nama }}</td>
                                <td class="align-middle">{{ $item->jabatan }}</td>
                                <td class="text-center">
                                    <a href="{{ route('anggota.show', $item->id) }}" class="btn btn-outline-info btn-sm rounded-pill me-1">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('anggota.edit', $item->id) }}" class="btn btn-outline-warning btn-sm rounded-pill me-1">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{ route('anggota.confirmDelete', $item->id) }}" class="btn btn-outline-danger btn-sm rounded-pill">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted fst-italic">Belum ada anggota.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .btn-maroon {
        background-color: #6b0f1a;
        color: #fff;
        border: none;
    }

    .btn-maroon:hover {
        background-color: #500c15;
        color: #fff;
    }

    .section-title {
        font-size: 2rem;
        letter-spacing: 1px;
    }

    .table th,
    .table td {
        vertical-align: middle;
    }
</style>
@endsection