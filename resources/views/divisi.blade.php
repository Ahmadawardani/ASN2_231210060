@extends('layouts.app')

@section('title', 'Divisi - Himpunan Mahasiswa Program Studi Sistem Informasi')

@section('content')
    <!-- Section Divisi -->
    <section class="section bg-light py-5" id="divisi">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Struktur Divisi</h2>
                <p class="lead">Kenali setiap divisi dan peran penting yang ada di dalam Himpunan Mahasiswa Program Studi Sistem Informasi.</p>
            </div>

            <!-- BPH -->
            <div class="row mb-4">
                <div class="col-12">
                    <h4 class="fw-bold text-center mb-4">Badan Pengurus Harian (BPH)</h4>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body text-center py-4">
                            <h5 class="card-title fw-bold">Ketua</h5>
                            <p class="card-text">Nama Ketua BPH</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body text-center py-4">
                            <h5 class="card-title fw-bold">Wakil Ketua</h5>
                            <p class="card-text">Nama Wakil Ketua BPH</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body text-center py-4">
                            <h5 class="card-title fw-bold">Sekretaris 1</h5>
                            <p class="card-text">Nama Sekretaris 1</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body text-center py-4">
                            <h5 class="card-title fw-bold">Sekretaris 2</h5>
                            <p class="card-text">Nama Sekretaris 2</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body text-center py-4">
                            <h5 class="card-title fw-bold">Bendahara 1</h5>
                            <p class="card-text">Nama Bendahara 1</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body text-center py-4">
                            <h5 class="card-title fw-bold">Bendahara 2</h5>
                            <p class="card-text">Nama Bendahara 2</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Divisi Lainnya -->
            <div class="row">
                <div class="col-12">
                    <h4 class="fw-bold text-center mb-4">Divisi- Divisi</h4>
                </div>
                
                <!-- Pengembangan Organisasi dan Minat Bakat -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body text-center py-4">
                            <h5 class="card-title fw-bold">Divisi Pengembangan Organisasi dan Minat Bakat</h5>
                            <p class="card-text">Fokus pada pengembangan kemampuan dan minat mahasiswa dalam berbagai bidang.</p>
                        </div>
                    </div>
                </div>

                <!-- Humas -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body text-center py-4">
                            <h5 class="card-title fw-bold">Divisi Humas</h5>
                            <p class="card-text">Membangun hubungan dengan pihak luar dan mengelola komunikasi eksternal organisasi.</p>
                        </div>
                    </div>
                </div>

                <!-- Medinfo -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body text-center py-4">
                            <h5 class="card-title fw-bold">Divisi Medinfo</h5>
                            <p class="card-text">Mendukung aspek teknologi dan informasi dalam organisasi, khususnya media dan publikasi.</p>
                        </div>
                    </div>
                </div>

                <!-- Wirabakti -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body text-center py-4">
                            <h5 class="card-title fw-bold">Divisi Wirabakti</h5>
                            <p class="card-text">Berkontribusi langsung kepada masyarakat melalui kegiatan sosial dan pengabdian.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
