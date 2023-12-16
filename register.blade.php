<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Anggota</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #343a40;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            box-sizing: border-box;
        }

        h1 {
            color: #fff;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
            text-align: left;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
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
            width: 100%;
            box-sizing: border-box;
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            text-decoration: none;
            background-color: #28a745;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
            display: inline-block;
            text-align: center;
            width: 100%;
            box-sizing: border-box;
        }

        a:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <header>
        <h1>Pendaftaran Anggota Baru</h1>
    </header>

    <form action="{{ route('submitRegister') }}" method="post">
        @csrf 
        @method('POST')

        <h2>Tambah Anggota</h2>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="{{ old('nama') }}" required />

        <label for="jenis_keanggotaan">Jenis Keanggotaan:</label>
        <select name="jenis_keanggotaan" id="jenis_keanggotaan" required>
            <option value="PREMIUM">Premium</option>
            <option value="VIP">VIP</option>
            <option value="REGULER">REGULER</option>
        </select>

        <button type="submit" name="btn_simpan">Daftar</button>
        <a href="{{ route('getmember') }}">Kembali</a>
    </form>

</body>
</html>
