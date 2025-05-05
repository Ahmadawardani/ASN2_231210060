@extends('layouts.app')

@section('title', 'Daftar Anggota')

@section('content')
<section class="section" id="anggota">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-10 text-center">
                <h2 class="section-title">Daftar Anggota HMPS - Sistem Informasi</h2>
                <p class="text-muted">Berikut adalah daftar anggota aktif beserta jabatan mereka.</p>
                <a href="{{ route('anggota.create') }}" class="btn btn-primary mt-3">+ Tambah Anggota</a>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered bg-white shadow-sm rounded">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">NIM</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse ($anggota as $item)
    <tr>
        <td>{{ $item->nim }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->jabatan }}</td>
        <td>
            <a href="{{ route('anggota.show', $item->id) }}" class="btn btn-sm btn-outline-info">Detail</a>
            <a href="{{ route('anggota.edit', $item->id) }}" class="btn btn-sm btn-outline-warning">Edit</a>
            <a href="{{ route('anggota.confirmDelete', $item->id) }}" class="btn btn-sm btn-outline-danger">Hapus</a>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="4" class="text-center text-muted">Belum ada anggota.</td>
    </tr>
@endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
