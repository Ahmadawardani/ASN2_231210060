@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <header class="main-header clearfix" role="header" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('images/banner.jpg') }}') center center / cover no-repeat;">
        <div class="container text-center text-white py-5">
            <div class="main-banner">
                <h4 class="fw-light mb-3">Welcome to <em class="text-info">Himpunan Mahasiswa Program Studi Sistem Informasi</em></h4>
                <h2 class="display-4 fw-bold mb-4">YOUR JOURNEY STARTS HERE</h2>
                <a href="#fitur" class="btn btn-outline-light btn-lg rounded-pill shadow-sm px-4 py-2 transition-all">Get Started</a>
            </div>
        </div>
    </header>

    <!-- Section Cards -->
    <section class="section bg-light py-5" id="fitur">
        <div class="container">
            <h3 class="text-center mb-5 fw-bold text-primary">Eksplorasi Fitur Kami</h3>
            <div class="row text-center g-4">
                @php
                    $fitur = [
                        ['icon' => 'fas fa-users', 'color' => 'primary', 'title' => 'Daftar Anggota', 'desc' => 'Lihat daftar lengkap anggota HMPS Sistem Informasi dan perannya.', 'route' => 'anggota.index', 'btn' => 'primary'],
                        ['icon' => 'fas fa-calendar-alt', 'color' => 'success', 'title' => 'Kegiatan', 'desc' => 'Ketahui berbagai program kerja dan kegiatan mahasiswa yang telah dilaksanakan.', 'route' => 'kegiatan.index', 'btn' => 'success'],
                        ['icon' => 'fas fa-network-wired', 'color' => 'warning', 'title' => 'Divisi', 'desc' => 'Kenali struktur divisi yang ada di dalam HMPS SI dan fungsinya masing-masing.', 'route' => 'divisi.index', 'btn' => 'warning'],
                        ['icon' => 'fas fa-newspaper', 'color' => 'danger', 'title' => 'Berita / Artikel', 'desc' => 'Baca berita terkini dan artikel menarik seputar dunia mahasiswa dan teknologi.', 'route' => 'berita.index', 'btn' => 'danger'],
                        ['icon' => 'fas fa-sitemap', 'color' => 'secondary', 'title' => 'Struktur Kepanitiaan', 'desc' => 'Lihat susunan panitia kegiatan dan siapa saja yang terlibat dalam organisasi.', 'route' => 'kepanitiaan.index', 'btn' => 'info'],
                    ];
                @endphp

                <div class="row text-center g-4 justify-content-center">
    @foreach ($fitur as $index => $item)
        {{-- Baris pertama: tampilkan 3 kolom --}}
        @if ($index < 3)
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 animate__animated animate__fadeInUp">
                    <div class="card-body py-5">
                        <i class="{{ $item['icon'] }} fa-3x text-{{ $item['color'] }} mb-3"></i>
                        <h5 class="card-title fw-bold">{{ $item['title'] }}</h5>
                        <p class="card-text">{{ $item['desc'] }}</p>
                        <a href="{{ route($item['route']) }}" class="btn btn-{{ $item['btn'] }} btn-sm mt-2 text-white">Lihat</a>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</div>

{{-- Baris kedua dengan dua kolom di tengah --}}
<div class="row text-center g-4 justify-content-center mt-2">
    @foreach ($fitur as $index => $item)
        @if ($index >= 3)
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 animate__animated animate__fadeInUp">
                    <div class="card-body py-5">
                        <i class="{{ $item['icon'] }} fa-3x text-{{ $item['color'] }} mb-3"></i>
                        <h5 class="card-title fw-bold">{{ $item['title'] }}</h5>
                        <p class="card-text">{{ $item['desc'] }}</p>
                        <a href="{{ route($item['route']) }}" class="btn btn-{{ $item['btn'] }} btn-sm mt-2 text-white">Lihat</a>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</div>

        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-dark text-white pt-5 pb-3 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5 class="fw-bold">Tentang HMPS SI</h5>
                    <p>HMPS Sistem Informasi Universitas Mercu Buana Yogyakarta adalah wadah bagi mahasiswa untuk berkembang secara akademik, organisasi, dan sosial.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5 class="fw-bold">Navigasi</h5>
                    <ul class="list-unstyled">
                        <li><a href="#fitur" class="text-white text-decoration-none">Fitur</a></li>
                        <li><a href="{{ route('anggota.index') }}" class="text-white text-decoration-none">Anggota</a></li>
                        <li><a href="{{ route('kegiatan.index') }}" class="text-white text-decoration-none">Kegiatan</a></li>
                        <li><a href="{{ route('divisi.index') }}" class="text-white text-decoration-none">Divisi</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5 class="fw-bold">Kontak Kami</h5>
                    <p><i class="fas fa-envelope me-2"></i>hmps.si@mercubuana-yogya.ac.id</p>
                    <p><i class="fas fa-map-marker-alt me-2"></i>Universitas Mercu Buana Yogyakarta</p>
                </div>
            </div>
            <div class="text-center border-top pt-3 mt-4">
                <small>&copy; {{ date('Y') }} HMPS Sistem Informasi - UMBY. All rights reserved.</small>
            </div>
        </div>
    </footer>
@endsection