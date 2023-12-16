<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Anggota</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
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
        <h1>Edit Anggota</h1>
    </header>

    <form action="{{ url('/edit/' . $member['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <h2>Edit Data Anggota</h2>

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="{{ $member['nama'] }}" required>

        <label for="jenis_keanggotaan">Jenis Keanggotaan:</label>
        <select id="jenis_keanggotaan" name="jenis_keanggotaan" required>
            <option value="PREMIUM" @if($member['jenis_keanggotaan'] == 'PREMIUM') selected @endif>PREMIUM</option>
            <option value="VIP" @if($member['jenis_keanggotaan'] == 'VIP') selected @endif>VIP</option>
            <option value="REGULER" @if($member['jenis_keanggotaan'] == 'REGULER') selected @endif>REGULER</option>
        </select>

        <button type="submit">Update</button>
        <a href="{{ route('getmember') }}">Kembali</a>
    </form>

</body>
</html>
