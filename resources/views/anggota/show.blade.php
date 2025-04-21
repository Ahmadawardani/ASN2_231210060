@extends('layouts.app')

@section('title', 'Detail Anggota')

@section('content')
<section class="section" id="anggota-detail">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm p-4 border-0" style="border-radius: 20px;">
                    <div class="card-body">
                        <h4 class="mb-4 text-primary">Detail Anggota</h4>
                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item"><strong>NIM:</strong> {{ $anggota->nim }}</li>
                            <li class="list-group-item"><strong>Nama:</strong> {{ $anggota->nama }}</li>
                            <li class="list-group-item"><strong>Jabatan:</strong> {{ $anggota->jabatan }}</li>
                        </ul>
                        <a href="{{ route('anggota.index') }}" class="btn btn-outline-primary">
                            ← Kembali ke Daftar Anggota
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection