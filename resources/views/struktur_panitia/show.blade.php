@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Struktur Panitia</h1>
    <p><strong>Nama Kegiatan:</strong> {{ $struktur_panitia->nama_kegiatan }}</p>
    <p><strong>Ketua:</strong> {{ $struktur_panitia->ketua_panitia }}</p>
    <p><strong>Sekretaris 1:</strong> {{ $struktur_panitia->sekretaris_1 }}</p>
    <p><strong>Sekretaris 2:</strong> {{ $struktur_panitia->sekretaris_2 }}</p>
    <p><strong>Bendahara 1:</strong> {{ $struktur_panitia->bendahara_1 }}</p>
    <p><strong>Bendahara 2:</strong> {{ $struktur_panitia->bendahara_2 }}</p>
    @foreach(['sie_acara','sie_humas','sie_medinfo','sie_perlengkapan','sie_konsumsi'] as $field)
        <p><strong>{{ ucfirst(str_replace('_', ' ', $field)) }}:</strong>
            {{ implode(', ', $struktur_panitia->$field ?? []) }}
        </p>
    @endforeach
    <a href="{{ route('struktur_panitia.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
