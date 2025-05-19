@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #f8f0f2;
    }

    .detail-container {
        background: #fff0f5;
        border: 2px solid maroon;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 0 10px rgba(128, 0, 0, 0.2);
    }

    h1 {
        color: maroon;
        font-weight: bold;
        text-align: center;
        margin-bottom: 30px;
    }

    .detail-item {
        margin-bottom: 15px;
        font-size: 16px;
    }

    .detail-item strong {
        color: #800000;
        width: 160px;
        display: inline-block;
    }

    .btn-secondary {
        background-color: #800000;
        border-color: #800000;
        font-weight: bold;
    }

    .btn-secondary:hover {
        background-color: #a00000;
        border-color: #a00000;
    }
</style>

<div class="container mt-4">
    <div class="detail-container">
        <h1>Detail Struktur Panitia</h1>

        <div class="detail-item"><strong>Nama Kegiatan:</strong> {{ $struktur_panitia->nama_kegiatan }}</div>
        <div class="detail-item"><strong>Ketua:</strong> {{ $struktur_panitia->ketua_panitia }}</div>
        <div class="detail-item"><strong>Sekretaris 1:</strong> {{ $struktur_panitia->sekretaris_1 }}</div>
        <div class="detail-item"><strong>Sekretaris 2:</strong> {{ $struktur_panitia->sekretaris_2 }}</div>
        <div class="detail-item"><strong>Bendahara 1:</strong> {{ $struktur_panitia->bendahara_1 }}</div>
        <div class="detail-item"><strong>Bendahara 2:</strong> {{ $struktur_panitia->bendahara_2 }}</div>

        @foreach(['sie_acara','sie_humas','sie_medinfo','sie_perlengkapan','sie_konsumsi'] as $field)
            <div class="detail-item">
                <strong>{{ ucfirst(str_replace('_', ' ', $field)) }}:</strong>
                {{ implode(', ', $struktur_panitia->$field ?? []) }}
            </div>
        @endforeach

        <div class="text-end mt-4">
            <a href="{{ route('struktur_panitia.index') }}" class="btn btn-secondary">← Kembali</a>
        </div>
    </div>
</div>
@endsection
