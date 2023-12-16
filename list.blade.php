<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        label {
            margin-right: 8px;
            color: #555;
        }

        input, select {
            padding: 8px;
            margin-right: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            padding: 10px;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid #ddd;
            text-align: left;
        }

        th, td {
            padding: 12px;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        .button-container {
            text-align: center;
            margin-top: 10px;
        }

        a {
            text-decoration: none;
            background-color: #28a745;
            color: #fff;
            padding: 10px;
            border-radius: 4px;
            margin: 0 5px;
            display: inline-block;
        }

        a:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <h1>Daftar Anggota</h1>
        <div class="button-container">
            <a href="{{ url('home') }}">Home</a>
            <a href="{{ route('getmember') }}">List Anggota</a>
            <a href="{{ route('register') }}">Tambah Anggota</a>
        </div>
    
        <br>
    <!-- Formulir Pencarian -->
    <form action="{{ url('search') }}" method="GET">
        <label for="search">Cari Anggota:</label>
        <input type="text" id="search" name="search" placeholder="Masukkan ID atau Nama">
        <select name="search_by">
            <option value="id">ID</option>
            <option value="nama">Nama</option>
        </select>
        <button type="submit">Cari</button>
    </form>

    <!-- Tambahkan setelah tabel -->
    @if(isset($query) && count($query) > 0)
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Jenis Keanggotaan</th>
                    <th>TGL Daftar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($query as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->jenis_keanggotaan }}</td>
                        <td>{{ $row->tgl_daftar }}</td>
                        <td>
                            <a href="{{ url('/edit/' . $row->id) }}">Edit</a>
                            <a href="{{ url('/delete/' . $row->id) }}" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Data tidak ditemukan.</p>
    @endif

</body>
</html>
