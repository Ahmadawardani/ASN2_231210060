@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #f8f0f2;
    }

    h1 {
        color: maroon;
        font-weight: bold;
    }

    .form-container {
        background: #fff0f5;
        border: 2px solid maroon;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 0 10px rgba(128, 0, 0, 0.2);
    }

    label {
        font-weight: bold;
        color: #800000;
    }

    .btn-maroon {
        background-color: maroon;
        color: white;
        font-weight: bold;
    }

    .btn-maroon:hover {
        background-color: #a00000;
        color: #fff;
    }
</style>

<div class="container mt-4">
    <div class="form-container">
        <h1 class="text-center mb-4">Edit Struktur Panitia</h1>
        <form action="{{ route('struktur_panitia.update', $struktur_panitia->id) }}" method="POST">
            @csrf @method('PUT')
            
            {{-- Form component --}}
            @include('struktur_panitia.form', ['item' => $struktur_panitia])
            
            <div class="text-end">
                <button type="submit" class="btn btn-maroon">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
