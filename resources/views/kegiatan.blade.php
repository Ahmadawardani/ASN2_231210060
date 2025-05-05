@extends('layouts.app')

@section('title', 'Kegiatan - HMPS SI')

@section('content')
    <section class="section py-5" id="kegiatan">
        <div class="container">
            <h3 class="text-center mb-4">Kegiatan HMPS SI</h3>

            <!-- Kegiatan 1 -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <h4>Kegiatan 1: Pelatihan Anggota</h4>
                    <p>Deskripsi kegiatan yang dilakukan, tujuan kegiatan, tanggal, dan lokasi.</p>
                    <p><strong>Tanggal:</strong> 1 Januari 2025</p>
                    <p><strong>Tempat:</strong> Aula Kampus</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/kegiatan1.jpg') }}" class="img-fluid rounded" alt="Kegiatan 1">
                </div>
            </div>

            <!-- Kegiatan 2 -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <h4>Kegiatan 2: Seminar Teknologi Informasi</h4>
                    <p>Deskripsi kegiatan yang dilakukan, tujuan kegiatan, tanggal, dan lokasi.</p>
                    <p><strong>Tanggal:</strong> 15 Februari 2025</p>
                    <p><strong>Tempat:</strong> Ruang Seminar Fakultas Teknologi Informasi</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/kegiatan2.jpg') }}" class="img-fluid rounded" alt="Kegiatan 2">
                </div>
            </div>

            <!-- Kegiatan 3 -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <h4>Kegiatan 3: Lomba Coding</h4>
                    <p>Deskripsi kegiatan yang dilakukan, tujuan kegiatan, tanggal, dan lokasi.</p>
                    <p><strong>Tanggal:</strong> 20 Maret 2025</p>
                    <p><strong>Tempat:</strong> Laboratorium Komputer</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/kegiatan3.jpg') }}" class="img-fluid rounded" alt="Kegiatan 3">
                </div>
            </div>
        </div>
    </section>
@endsection