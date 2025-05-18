@extends('layouts.app')

@section('title', 'Tambah Kegiatan')

@section('content')
<div class="container py-5">
    <h2 class="text-center text-maroon mb-4 fw-bold">Tambah Kegiatan</h2>

    <form action="{{ route('kegiatan.store') }}" method="POST" class="shadow-lg p-4 rounded-lg">
        @csrf
        <div class="mb-3">
            <label for="nama_kegiatan" class="form-label fw-semibold text-maroon">Nama Kegiatan</label>
            <input type="text" name="nama_kegiatan" class="form-control" id="nama_kegiatan" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label fw-semibold text-maroon">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label fw-semibold text-maroon">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" id="tanggal" required>
        </div>

        <div class="mb-3">
            <label for="tempat" class="form-label fw-semibold text-maroon">Tempat</label>
            <input type="text" name="tempat" class="form-control" id="tempat" required>
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-maroon btn-lg px-4 py-2">Simpan</button>
            <a href="{{ route('kegiatan.index') }}" class="btn btn-outline-secondary btn-lg px-4 py-2">Kembali</a>
        </div>
    </form>
</div>

<style>

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


    form {
        border-radius: 15px;
        background-color: #f9f9f9;
        padding: 2rem;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .form-label {
        font-size: 1rem;
        font-weight: 600;
    }


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


    .btn-outline-secondary:hover {
        background-color: #f8f9fa;
        color: #800000;
    }


    .container {
        margin-top: 3rem;
    }
</style>

@endsection