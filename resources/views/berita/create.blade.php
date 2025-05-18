@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Berita</h1>
    <form action="{{ route('berita.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Berita</label>
            <input type="text" name="nama_berita" class="form-control">
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Tanggal Publikasi</label>
            <input type="date" name="tanggal_publikasi" class="form-control">
        </div>
        <button class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
