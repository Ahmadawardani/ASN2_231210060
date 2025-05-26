@extends('layouts.app')

@section('title', 'Kegiatan - Himpunan Mahasiswa Program Studi Sistem Informasi')

@section('content')
<section class="section py-5 bg-light" id="kegiatan">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-maroon">Kegiatan</h2>
            <p class="lead text-muted">Lihat berbagai kegiatan yang telah dilakukan oleh Himpunan Mahasiswa Program Studi Sistem Informasi.</p>
        </div>

        <div class="row">
            @foreach ($kegiatan as $item)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-lg border-0 h-100 custom-card">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-maroon">{{ $item->nama_kegiatan }}</h5>
                            <p class="card-text text-muted">{!! nl2br(e($item->deskripsi)) !!}</p>
                            <p class="card-text"><small class="text-muted">Tanggal: {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</small></p>
                            <p class="card-text"><small class="text-muted">Tempat: {{ $item->tempat }}</small></p>
                        
                            <div class="d-flex justify-content-between mt-3">
                                <a href="{{ route('kegiatan.edit', $item->id) }}" class="btn btn-sm btn-warning custom-btn">Edit</a>
                                <form action="{{ route('kegiatan.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus kegiatan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger custom-btn">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mb-4">
            <a href="{{ route('kegiatan.create') }}" class="btn btn-lg btn-maroon custom-btn">+ Tambah Kegiatan</a>
        </div>

    </div>
</section>

<style>
    .text-maroon {
        color: #800000;
    }

    .custom-btn {
        border-radius: 25px;
        transition: all 0.3s ease;
    }

    .custom-btn:hover {
        background-color: #800000;
        color: white;
        border-color: #800000;
        transform: scale(1.1);
    }

    .custom-card {
        border-radius: 15px;
        transition: all 0.3s ease;
    }

    .custom-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    }


    .card-title {
        font-size: 1.3rem;
        font-weight: 600;
        color: #800000;
    }


    .card-text {
        font-size: 1rem;
        color: #555;
        line-height: 1.5;
    }


    .btn-maroon {
        background-color: #800000;
        color: white;
        border-radius: 25px;
        transition: all 0.3s ease;
    }

    .btn-maroon:hover {
        background-color: #a50000;
        color: white;
    }


    .card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }


    .section {
        padding-top: 4rem;
        padding-bottom: 4rem;
    }
</style>

@endsection