<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        form {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            text-align: center;
            box-sizing: border-box;
        }

        label {
            display: block;
            margin-bottom: 8px;
            text-align: left;
        }

        input {
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
    </style>
</head>
<body>

    <form action="{{ url('login') }}" method="post" accept-charset="utf-8">
        @csrf 
        <h1>Silahkan Login</h1>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="" />

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="" />

        <input type="submit" name="btn_simpan" value="Login" />
    </form>

</body>
</html>
