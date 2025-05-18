@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Struktur Panitia</h1>
    <a href="{{ route('struktur_panitia.create') }}" class="btn btn-primary mb-3">+ Tambah Struktur</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Kegiatan</th>
                <th>Ketua</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $panitia)
                <tr>
                    <td>{{ $panitia->nama_kegiatan }}</td>
                    <td>{{ $panitia->ketua_panitia }}</td>
                    <td>
                        <a href="{{ route('struktur_panitia.show', $panitia->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('struktur_panitia.edit', $panitia->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('struktur_panitia.destroy', $panitia->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
