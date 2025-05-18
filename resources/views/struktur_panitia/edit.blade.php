@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Struktur Panitia</h1>
    <form action="{{ route('struktur_panitia.update', $struktur_panitia->id) }}" method="POST">
        @csrf @method('PUT')
        @include('struktur_panitia.form', ['item' => $struktur_panitia])
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
