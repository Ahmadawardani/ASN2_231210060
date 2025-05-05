@extends('layouts.app')

@section('title', 'Struktur Kepanitiaan - HMPS SI')

@section('content')
    <section class="section py-5" id="kepanitiaan">
        <div class="container">
            <h3 class="text-center mb-4">Struktur Kepanitiaan</h3>

            <!-- Contoh Panitia 1 -->
            <div class="card mb-4 shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">ISCOMFEST 2025</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Ketua Panitia: <strong>Farhan Ramadhan</strong></li>
                        <li class="list-group-item">Wakil Ketua: <strong>Rizka Amelia</strong></li>
                        <li class="list-group-item">Sekretaris: <strong>Dani Prasetyo</strong></li>
                        <li class="list-group-item">Bendahara: <strong>Alya Nurhaliza</strong></li>
                        <li class="list-group-item">Koordinator Acara: <strong>Yordan Saputra</strong></li>
                        <li class="list-group-item">Koordinator Humas: <strong>Sinta Arifiani</strong></li>
                    </ul>
                </div>
            </div>

            <!-- Contoh Panitia 2 -->
            <div class="card mb-4 shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Pelatihan Web Laravel</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Ketua Panitia: <strong>Muhammad Alif</strong></li>
                        <li class="list-group-item">Sekretaris: <strong>Salisa Ahmad Wardani</strong></li>
                        <li class="list-group-item">Bendahara: <strong>Rama Dwiputra</strong></li>
                        <li class="list-group-item">Koordinator Materi: <strong>Irwan Maulana</strong></li>
                        <li class="list-group-item">Koordinator Publikasi: <strong>Yasmin Shabrina</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection