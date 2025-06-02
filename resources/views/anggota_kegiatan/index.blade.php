@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Anggota Kegiatan</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('anggota_kegiatan.create') }}" class="btn btn-primary mb-3">Tambah Anggota</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($anggota as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->keterangan ?? '-' }}</td>
                <td>
                    <a href="{{ route('anggota_kegiatan.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('anggota_kegiatan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('anggota_kegiatan.destroy', $item->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Yakin hapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @if($anggota->isEmpty())
            <tr>
                <td colspan="4" class="text-center">Data tidak ada.</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
