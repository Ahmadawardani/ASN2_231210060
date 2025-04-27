@extends('layouts.app')

@section('title', 'Daftar Anggota')

@section('content')
<section class="section" id="anggota">
    <!-- Header dengan tombol dan deskripsi -->
    <div class="container my-5">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-8 text-center">
                <h2 class="section-title text-primary mb-3">Daftar Anggota HMPS - Sistem Informasi</h2>
                <p class="text-muted">Berikut adalah daftar anggota aktif beserta jabatan. Menambah, mengedit, atau menghapus data anggota. Berdasarkan izin dari ketua</p>
                <a href="{{ route('anggota.create') }}" class="btn btn-lg btn-outline-primary mt-3">+ Tambah Anggota</a>
            </div>
        </div>
    </div>

    <!-- Table Responsive -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered shadow-sm rounded">
                        <thead class="thead-light">
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($anggota as $item)
                                <tr>
                                    <td class="align-middle">{{ $item->nim }}</td>
                                    <td class="align-middle">{{ $item->nama }}</td>
                                    <td class="align-middle">{{ $item->jabatan }}</td>
                                    <td class="align-middle">
                                        <div class="d-flex">
                                            <a href="{{ route('anggota.show', $item->id) }}" class="btn btn-sm btn-info mr-2">Detail</a>
                                            <a href="{{ route('anggota.edit', $item->id) }}" class="btn btn-sm btn-warning mr-2">Edit</a>
                                            <a href="{{ route('anggota.confirmDelete', $item->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                                        </div>
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