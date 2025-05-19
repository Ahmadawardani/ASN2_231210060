@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #fdf4f5;
    }

    .form-container {
        background: #fff0f5;
        border: 2px solid maroon;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 4px 12px rgba(128, 0, 0, 0.2);
        max-width: 800px;
        margin: auto;
    }

    h1 {
        color: maroon;
        font-weight: bold;
        text-align: center;
        margin-bottom: 25px;
    }

    .btn-success {
        background-color: maroon;
        border-color: maroon;
        font-weight: bold;
        padding: 10px 20px;
        transition: 0.3s;
    }

    .btn-success:hover {
        background-color: #a00000;
        border-color: #a00000;
    }

    .form-label {
        font-weight: bold;
        color: #800000;
    }
</style>

<div class="container mt-4">
    <div class="form-container">
        <h1>Tambah Struktur Panitia</h1>
        <form action="{{ route('struktur_panitia.store') }}" method="POST">
            @csrf
            @include('struktur_panitia.form')
            <div class="text-end mt-3">
                <button type="submit" class="btn btn-success">Simpan Struktur</button>
            </div>
        </form>
    </div>
</div>
@endsection
