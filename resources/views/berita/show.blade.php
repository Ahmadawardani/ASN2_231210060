@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $berita->nama_berita }}</h1>
    <p>{{ $berita->deskripsi }}</p>
    <p><strong>Tanggal Publikasi:</strong> {{ $berita->tanggal_publikasi }}</p>
    <a href="{{ route('berita.index') }}" class="btn btn-secondary mt-3">Kembali ke Daftar</a>
</div>
@endsection
