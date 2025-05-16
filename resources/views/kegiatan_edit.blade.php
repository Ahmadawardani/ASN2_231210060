@extends('layouts.app')

@section('title', 'Edit Kegiatan')

@section('content')
<div class="container mt-5">
    <h2 class="text-center text-maroon mb-4 fw-bold">Edit Kegiatan</h2>
    <form action="{{ route('kegiatan.update', $kegiatan->id) }}" method="POST" class="shadow-lg p-4 rounded-lg">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_kegiatan" class="form-label fw-semibold text-maroon">Nama Kegiatan</label>
            <input type="text" name="nama_kegiatan" class="form-control" id="nama_kegiatan" value="{{ $kegiatan->nama_kegiatan }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label fw-semibold text-maroon">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi" rows="4" required>{{ $kegiatan->deskripsi }}</textarea>
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label fw-semibold text-maroon">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" id="tanggal" value="{{ $kegiatan->tanggal }}" required>
        </div>

        <div class="mb-3">
            <label for="tempat" class="form-label fw-semibold text-maroon">Tempat</label>
            <input type="text" name="tempat" class="form-control" id="tempat" value="{{ $kegiatan->tempat }}" required>
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-maroon btn-lg px-4 py-2">Perbarui</button>
            <a href="{{ route('kegiatan.index') }}" class="btn btn-outline-secondary btn-lg px-4 py-2">Batal</a>
        </div>
    </form>
</div>

<style>
    /* Warna Maroon untuk Teks dan Tombol */
    .text-maroon {
        color: #800000;
    }

    .btn-maroon {
        background-color: #800000;
        color: white;
        border-radius: 25px;
        transition: all 0.3s ease;
    }

    .btn-maroon:hover {
        background-color: #a50000;
        color: white;
    }

    /* Desain Form dengan Bayangan dan Sudut Melengkung */
    form {
        border-radius: 15px;
        background-color: #f9f9f9;
        padding: 2rem;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    /* Label dengan Ukuran Font Lebih Besar dan Tebal */
    .form-label {
        font-size: 1rem;
        font-weight: 600;
    }

    /* Input dan Textarea dengan Fokus yang Menonjol */
    input[type="text"], input[type="date"], textarea {
        border-radius: 10px;
        border: 1px solid #ddd;
        font-size: 1rem;
        padding: 10px;
        transition: all 0.3s ease;
    }

    input[type="text"]:focus, input[type="date"]:focus, textarea:focus {
        border-color: #800000;
        box-shadow: 0 0 5px rgba(128, 0, 0, 0.3);
    }

    /* Tombol Batal dengan Efek Hover */
    .btn-outline-secondary:hover {
        background-color: #f8f9fa;
        color: #800000;
    }

    /* Menambahkan Margin dan Padding pada Form */
    .container {
        margin-top: 3rem;
    }
</style>
@endsection