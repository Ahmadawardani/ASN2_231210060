<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f8;
            margin: 40px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .btn-add {
            display: inline-block;
            margin-bottom: 15px;
            padding: 10px 16px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-add:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background-color: #2196F3;
            color: white;
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .action-links a {
            text-decoration: none;
            margin-right: 8px;
            color: #007bff;
            transition: color 0.2s;
        }

        .action-links a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Anggota HMPS-Sistem Informasi</h1>
        <a href="{{ route('anggota.create') }}" class="btn-add">➕ Tambah Anggota</a>
        <table>
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($anggota as $id => $data)
                    <tr>
                        <td>{{ $data['nim'] }}</td>
                        <td>{{ $data['nama'] }}</td>
                        <td>{{ $data['jabatan'] }}</td>
                        <td class="action-links">
                            <a href="{{ route('anggota.show', $id) }}">Detail</a> |
                            <a href="{{ route('anggota.edit', $id) }}">Edit</a> |
                            <a href="{{ route('anggota.confirmDelete', $id) }}">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>