@extends('layouts.app')

@section('title', 'Kontak - HMPS SI')

@section('content')
    <section class="section py-5" id="kontak">
        <div class="container">
            <h3 class="text-center mb-5">Hubungi Kami</h3>
            <div class="row justify-content-center">
                <div class="col-md-6 mb-4">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <div class="card-body py-4">
                            <i class="fab fa-instagram fa-3x text-danger mb-3"></i>
                            <h5 class="card-title">Instagram</h5>
                            <p class="card-text">Ikuti kami untuk info terbaru seputar kegiatan HMPS SI.</p>
                            <a href="https://www.instagram.com/hmpssi.umby" target="_blank" class="btn btn-outline-danger btn-sm mt-2">
                                Kunjungi Instagram
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <div class="card-body py-4">
                            <i class="fas fa-map-marker-alt fa-3x text-success mb-3"></i>
                            <h5 class="card-title">Alamat Kampus</h5>
                            <p class="card-text">Kampus 2 Universitas Mercu Buana Yogyakarta<br>Jl. Ring Road Utara, Condongcatur, Sleman</p>
                            <a href="https://maps.app.goo.gl/ChLY8JzPuUXzThdW7" target="_blank" class="btn btn-outline-success btn-sm mt-2">
                                Lihat di Google Maps
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection