<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Hapus Anggota</title>
</head>
<body>
    <h1>Apakah Anda yakin ingin menghapus anggota ini?</h1>
    <p><strong>NIM:</strong> {{ $anggota['nim'] }}</p>
    <p><strong>Nama:</strong> {{ $anggota['nama'] }}</p>
    <p><strong>Jabatan:</strong> {{ $anggota['jabatan'] }}</p>

    <form action="{{ route('anggota.destroy', $anggota['id']) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Hapus</button>
    </form>
    
    <a href="{{ route('anggota.index') }}">Kembali ke Daftar Anggota</a>
</body>
</html>