@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Berita</h1>
    <a href="{{ route('berita.create') }}" class="btn btn-primary mb-3">Tambah Berita</a>
    @foreach ($beritas as $berita)
        <div class="card mb-2">
            <div class="card-body">
                <h5>{{ $berita->nama_berita }}</h5>
                <p>{{ $berita->deskripsi }}</p>
                <small>Dipublikasikan: {{ $berita->tanggal_publikasi }}</small><br>
                <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <a href="{{ route('berita.show', $berita->id) }}" class="btn btn-sm btn-info">Lihat</a>
                <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
