@extends('layouts.app')

@section('title', 'Detail Divisi')

@section('content')
<div class="container py-5">
    <h2 class="mb-3">{{ $divisi->nama_divisi }}</h2>
    <p class="mb-4">{{ $divisi->deskripsi ?? 'Tidak ada deskripsi.' }}</p>

    <h4>Daftar Anggota:</h4>
    @if ($divisi->anggota->isEmpty())
        <p class="text-muted fst-italic">Belum ada anggota dalam divisi ini.</p>
    @else
        <ul class="list-group">
            @foreach ($divisi->anggota as $anggota)
                <li class="list-group-item">
                    {{ $anggota->nama }} - {{ $anggota->jabatan }}
                </li>
            @endforeach
        </ul>
    @endif

    <a href="{{ route('divisi.index') }}" class="btn btn-secondary mt-4">Kembali</a>
</div>
@endsection
