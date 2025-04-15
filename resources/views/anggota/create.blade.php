<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Anggota</title>
</head>
<body>
    <h1>Tambah Anggota Baru</h1>
    <form action="{{ route('anggota.store') }}" method="POST">
        @csrf
        <label for="nim">NIM:</label>
        <input type="text" name="nim" id="nim" required><br>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br>

        <label for="jabatan">Jabatan:</label>
        <input type="text" name="jabatan" id="jabatan" required><br>

        <button type="submit">Simpan</button>
    </form>
    <a href="{{ route('anggota.index') }}">Kembali ke Daftar Anggota</a>
</body>
</html>