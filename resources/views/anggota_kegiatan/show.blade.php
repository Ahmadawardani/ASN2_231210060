@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Anggota Kegiatan</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $anggota->nama }}</h5>
            <p class="card-text"><strong>Keterangan:</strong> {{ $anggota->keterangan ?? '-' }}</p>
            <p class="card-text"><small class="text-muted">Dibuat: {{ $anggota->created_at->format('d M Y H:i') }}</small></p>
            <p class="card-text"><small class="text-muted">Terakhir diubah: {{ $anggota->updated_at->format('d M Y H:i') }}</small></p>

            <a href="{{ route('anggota_kegiatan.index') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ route('anggota_kegiatan.edit', $anggota->id) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
</div>
@endsection
