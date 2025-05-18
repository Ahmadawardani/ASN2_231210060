@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Struktur Panitia</h1>
    <form action="{{ route('struktur_panitia.store') }}" method="POST">
        @csrf
        @include('struktur_panitia.form')
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
