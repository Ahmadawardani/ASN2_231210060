@extends('layouts.app')

@section('title', 'Edit Divisi')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4 text-maroon fw-bold">Edit Divisi</h2>

    <form action="{{ route('divisi.update', $divisi->id) }}" method="POST">
        @csrf @method('PUT')
        
        <div class="mb-3">
            <label class="form-label text-maroon">Nama Divisi</label>
            <input type="text" name="nama_divisi" class="form-control" value="{{ $divisi->nama_divisi }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label text-maroon">Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ $divisi->deskripsi }}</textarea>
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('divisi.index') }}" class="btn btn-secondary">← Kembali</a>
            <button type="submit" class="btn btn-maroon">Perbarui</button>
        </div>
    </form>
</div>

<style>
    /* Nuansa Merah Maroon */
    .text-maroon {
        color: #800000;
    }

    .btn-maroon {
        background-color: #800000;
        border-color: #800000;
    }

    .btn-maroon:hover {
        background-color: #9e1a1a;
        border-color: #9e1a1a;
    }

    /* Tombol Hover dan Gaya Umum */
    .btn-secondary:hover {
        background-color: #6c757d;
    }

    .form-control:focus {
        border-color: #800000;
        box-shadow: 0 0 0 0.25rem rgba(128, 0, 0, 0.25);
    }

    .form-label {
        font-weight: 500;
    }
</style>
@endsection