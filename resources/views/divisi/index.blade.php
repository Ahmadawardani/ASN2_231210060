@extends('layouts.app')

@section('title', 'Daftar Divisi')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4 text-maroon fw-bold">Daftar Divisi</h2>

    @if (session('success'))
        <div class="alert alert-success text-center mb-4">{{ session('success') }}</div>
    @endif

    <a href="{{ route('divisi_create') }}" class="btn btn-maroon mb-3">+ Tambah Divisi</a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover bg-white shadow-sm rounded">
            <thead class="thead-maroon">
                <tr>
                    <th>Nama Divisi</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($divisi as $item)
                    <tr>
                        <td>{{ $item->nama_divisi }}</td>
                        <td>{!! nl2br(e($item->deskripsi)) !!}</td>
                        <td>
                            <a href="{{ route('divisi_edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('divisi_destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @if($divisi->isEmpty())
                    <tr>
                        <td colspan="3" class="text-center text-muted">Belum ada data divisi.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

<style>
    /* Nuansa Merah Maroon */
    .text-maroon {
        color: #800000;
    }

    .btn-maroon {
        background-color: #800000;
        border-color: #800000;
    }

    .btn-maroon:hover {
        background-color: #9e1a1a;
        border-color: #9e1a1a;
    }

    .thead-maroon {
        background-color: #800000;
        color: white;
    }

    .table th, .table td {
        vertical-align: middle;
    }

    /* Tombol Hover dan Gaya Umum */
    .btn-warning:hover {
        background-color: #f39c12;
    }

    .btn-danger:hover {
        background-color: #d9534f;
    }

    .table-hover tbody tr:hover {
        background-color: #f8f9fa;
    }
</style>
@endsection