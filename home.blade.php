<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        h1 {
            color: #fff;
            text-align: center;
        }

        ol {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        li {
            margin: 10px 0;
        }

        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        a:hover {
            color: #0056b3;
        }
    </style>
    
</head>
<body>

    <header>
        <h1>Selamat Datang!</h1>
    </header>

    <ol>
        <li><a href="{{ url('getmember') }}">Lihat Data Member</a></li>
        <li><a href="{{ url('logout') }}">Logout</a></li>
        <li></li>
        <li></li>
    </ol>

</body>
</html>
