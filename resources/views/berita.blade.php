@extends('layouts.app')

@section('title', 'Berita & Artikel - HMPS SI')

@section('content')
    <section class="section py-5" id="berita">
        <div class="container">
            <h3 class="text-center mb-4">Berita & Artikel</h3>

            <!-- Berita 1 -->
            <div class="card mb-4 border-0 shadow-sm">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('images/berita1.jpg') }}" class="img-fluid rounded-start" alt="Berita 1">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Launching Program Kerja 2025</h5>
                            <p class="card-text">HMPS SI resmi meluncurkan program kerja tahun 2025 dalam acara pelantikan pengurus baru.</p>
                            <p class="card-text"><small class="text-muted">Dipublikasikan: 1 Januari 2025</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Berita 2 -->
            <div class="card mb-4 border-0 shadow-sm">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('images/berita2.jpg') }}" class="img-fluid rounded-start" alt="Berita 2">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Tips Sukses Belajar Pemrograman</h5>
                            <p class="card-text">Baca tips dan trik dari mahasiswa berprestasi untuk sukses dalam dunia coding!</p>
                            <p class="card-text"><small class="text-muted">Dipublikasikan: 10 Februari 2025</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Berita 3 -->
            <div class="card mb-4 border-0 shadow-sm">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('images/berita3.jpg') }}" class="img-fluid rounded-start" alt="Berita 3">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Lomba UI/UX Design Nasional</h5>
                            <p class="card-text">Mahasiswa HMPS SI raih juara 2 dalam ajang lomba desain antarmuka tingkat nasional.</p>
                            <p class="card-text"><small class="text-muted">Dipublikasikan: 25 Maret 2025</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection