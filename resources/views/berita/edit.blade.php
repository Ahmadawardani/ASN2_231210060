@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Berita</h1>
    <form action="{{ route('berita.update', $berita->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama Berita</label>
            <input type="text" name="nama_berita" class="form-control" value="{{ $berita->nama_berita }}">
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ $berita->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label>Tanggal Publikasi</label>
            <input type="date" name="tanggal_publikasi" class="form-control" value="{{ $berita->tanggal_publikasi }}">
        </div>
        <button class="btn btn-success">Update</button>
    </form>
</div>
@endsection
