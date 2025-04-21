@extends('layouts.app')

@section('title', 'Konfirmasi Hapus Anggota')

@section('content')
<section class="section" id="anggota-delete">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm p-4" style="border-radius: 20px;">
                    <div class="card-body">
                        <h3 class="section-title text-danger mb-4 text-center">
                            ⚠️ Apakah Anda yakin ingin menghapus anggota ini?
                        </h3>

                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item"><strong>NIM:</strong> {{ $anggota->nim }}</li>
                            <li class="list-group-item"><strong>Nama:</strong> {{ $anggota->nama }}</li>
                            <li class="list-group-item"><strong>Jabatan:</strong> {{ $anggota->jabatan }}</li>
                        </ul>

                        <form action="{{ route('anggota.destroy', $anggota->id) }}" method="POST" class="d-flex justify-content-between">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('anggota.index') }}" class="btn btn-outline-secondary">← Batal</a>
                            <button type="submit" class="btn btn-danger">🗑️ Ya, Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection