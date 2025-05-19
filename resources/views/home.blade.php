@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<header class="main-header clearfix" role="header" style="background: linear-gradient(rgba(64, 0, 0, 0.7), rgba(64, 0, 0, 0.7)), url('{{ asset('images/banner.jpg') }}') center center / cover no-repeat;">
    <div class="container text-center text-white py-5">
        <div class="main-banner">
            <h4 class="fw-light mb-3">Welcome to 
                <em class="text-warning">Himpunan Mahasiswa Program Studi Sistem Informasi</em>
            </h4>
            <h2 class="display-4 fw-bold mb-4" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">YOUR JOURNEY STARTS HERE</h2>
            <a href="#fitur" class="btn btn-outline-warning btn-lg rounded-pill shadow-lg px-5 py-2 transition-all">Get Started</a>
        </div>
    </div>
</header>

<!-- Section Cards -->
<section class="section bg-light py-5" id="fitur">
    <div class="container">
        <h3 class="text-center mb-5 fw-bold" style="color: #800000;">Eksplorasi Fitur Kami</h3>

        @php
            $fitur = [
                ['icon' => 'fas fa-users', 'color' => 'maroon', 'title' => 'Daftar Anggota', 'desc' => 'Lihat daftar lengkap anggota HMPS Sistem Informasi dan perannya.', 'route' => 'anggota.index', 'btn' => 'dark'],
                ['icon' => 'fas fa-calendar-alt', 'color' => 'maroon', 'title' => 'Kegiatan', 'desc' => 'Ketahui berbagai program kerja dan kegiatan mahasiswa yang telah dilaksanakan.', 'route' => 'kegiatan.index', 'btn' => 'dark'],
                ['icon' => 'fas fa-network-wired', 'color' => 'maroon', 'title' => 'Divisi', 'desc' => 'Kenali struktur divisi yang ada di dalam HMPS SI dan fungsinya masing-masing.', 'route' => 'divisi.index', 'btn' => 'dark'],
                ['icon' => 'fas fa-newspaper', 'color' => 'maroon', 'title' => 'Berita / Artikel', 'desc' => 'Baca berita terkini dan artikel menarik seputar dunia mahasiswa dan teknologi.', 'route' => 'berita.index', 'btn' => 'dark'],
                ['icon' => 'fas fa-sitemap', 'color' => 'maroon', 'title' => 'Struktur Kepanitiaan', 'desc' => 'Lihat susunan panitia kegiatan dan siapa saja yang terlibat dalam organisasi.', 'route' => 'struktur_panitia.index', 'btn' => 'dark'],

            ];
        @endphp

        <div class="row text-center g-4 justify-content-center">
            @foreach ($fitur as $index => $item)
                @if ($index < 3)
                <div class="col-md-4">
                    <div class="card border-0 shadow-lg h-100 bg-white rounded-4 hover-shadow animate__animated animate__fadeInUp">
                        <div class="card-body py-5">
                            <i class="{{ $item['icon'] }} fa-3x mb-3" style="color:#800000;"></i>
                            <h5 class="card-title fw-bold">{{ $item['title'] }}</h5>
                            <p class="card-text">{{ $item['desc'] }}</p>
                            <a href="{{ route($item['route']) }}" class="btn btn-{{ $item['btn'] }} btn-sm rounded-pill mt-2 text-white px-4">Lihat</a>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>

        <div class="row text-center g-4 justify-content-center mt-2">
            @foreach ($fitur as $index => $item)
                @if ($index >= 3)
                <div class="col-md-4">
                    <div class="card border-0 shadow-lg h-100 bg-white rounded-4 hover-shadow animate__animated animate__fadeInUp">
                        <div class="card-body py-5">
                            <i class="{{ $item['icon'] }} fa-3x mb-3" style="color:#800000;"></i>
                            <h5 class="card-title fw-bold">{{ $item['title'] }}</h5>
                            <p class="card-text">{{ $item['desc'] }}</p>
                            <a href="{{ route($item['route']) }}" class="btn btn-{{ $item['btn'] }} btn-sm rounded-pill mt-2 text-white px-4">Lihat</a>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>

    </div>
</section>

<!-- Footer Section -->
<footer class="pt-5 pb-3 mt-5" style="background-color: #300000;">
    <div class="container text-white">
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