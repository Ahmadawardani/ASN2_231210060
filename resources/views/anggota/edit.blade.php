<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Anggota</title>
</head>
<body>
    <h1>Edit Anggota</h1>
    <form action="{{ route('anggota.update', $anggota['id']) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nim">NIM:</label>
        <input type="text" name="nim" id="nim" value="{{ $anggota['nim'] }}" required><br>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="{{ $anggota['nama'] }}" required><br>

        <label for="jabatan">Jabatan:</label>
        <input type="text" name="jabatan" id="jabatan" value="{{ $anggota['jabatan'] }}" required><br>

        <button type="submit">Update</button>
    </form>
    <a href="{{ route('anggota.index') }}">Kembali ke Daftar Anggota</a>
</body>
</html>