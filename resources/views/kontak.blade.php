@extends('layouts.app')

@section('title', 'Kontak - HMPS SI')

@section('content')
<section class="section py-5" id="kontak">
    <div class="container">
        <h3 class="text-center mb-5 text-maroon">Hubungi Kami</h3>
        <div class="row justify-content-center">
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-lg h-100 text-center custom-card">
                    <div class="card-body py-4">
                        <i class="fab fa-instagram fa-4x text-danger mb-3 icon-hover"></i>
                        <h5 class="card-title text-maroon">Instagram</h5>
                        <p class="card-text text-muted">Ikuti kami untuk info terbaru seputar kegiatan HMPS SI.</p>
                        <a href="https://www.instagram.com/hmpssi.umby" target="_blank" class="btn btn-outline-danger btn-lg mt-3 custom-btn">
                            Kunjungi Instagram
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-lg h-100 text-center custom-card">
                    <div class="card-body py-4">
                        <i class="fas fa-map-marker-alt fa-4x text-success mb-3 icon-hover"></i>
                        <h5 class="card-title text-maroon">Alamat Kampus</h5>
                        <p class="card-text text-muted">Kampus 2 Universitas Mercu Buana Yogyakarta<br>Jl. Ring Road Utara, Condongcatur, Sleman</p>
                        <a href="https://maps.app.goo.gl/ChLY8JzPuUXzThdW7" target="_blank" class="btn btn-outline-success btn-lg mt-3 custom-btn">
                            Lihat di Google Maps
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>

    .text-maroon {
        color: #800000;
    }

    .custom-btn {
        border-radius: 30px;
        transition: all 0.3s ease;
    }

    .custom-btn:hover {
        background-color: #800000;
        color: white;
        border-color: #800000;
        transform: scale(1.1);
    }


    .custom-card {
        border-radius: 20px;
        transition: all 0.3s ease;
    }

    .custom-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.15);
    }

    .icon-hover:hover {
        transform: rotate(360deg);
        color: #800000;
        transition: all 0.5s ease;
    }


    .card:hover {
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }


    .card-title {
        font-weight: 600;
        font-size: 1.2rem;
    }

    .card-text {
        font-size: 1rem;
        line-height: 1.5;
    }


    .section {
        padding-top: 4rem;
        padding-bottom: 4rem;
    }
    .text-center {
        text-align: center;
        font-weight: 700;
        color: #800000;
    }
</style>
@endsection