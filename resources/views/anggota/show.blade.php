<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Anggota</title>
</head>
<body>
    <h1>Detail Anggota</h1>
    <p><strong>NIM:</strong> {{ $anggota['nim'] }}</p>
    <p><strong>Nama:</strong> {{ $anggota['nama'] }}</p>
    <p><strong>Jabatan:</strong> {{ $anggota['jabatan'] }}</p>

    <a href="{{ route('anggota.index') }}">Kembali ke Daftar Anggota</a>
</body>
</html>