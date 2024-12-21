<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Mengatur gaya umum */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('{{ asset("images/kucing.jpg") }}') no-repeat center center fixed;
            background-size: cover;
            color: white;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: flex-start; /* Posisikan konten ke atas */
            align-items: flex-start; /* Posisikan formulir ke kiri */
            padding: 20px; /* Memberikan sedikit padding agar tidak menempel ke tepi */
        }

        .container {
            width: 400px; /* Lebar formulir */
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Shadow abu-abu sedikit transparan */
            border-radius: 8px; /* Sudut membulat */
            opacity: 0.9; /* Memberikan sedikit transparansi */
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            color: #333;
        }

        input {
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        .login-btn {
            display: block;
            width: 400px;
            padding: 20px;
            background-color: rgba(0, 0, 255, 0.8);
            color: white;
            border: none;
            border-radius: 10px;
            text-align: center;
            text-decoration: none;
            font-weight: bold;
            margin-bottom: 30px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        button:hover {
            background-color: #45a049;
        }

        .login-link {
            font-size: 0.9em;
            color: #2ecc71;
            text-decoration: none;
            font-weight: bold;
        }

        .b-link {
            font-size: 0.9em;
            color: black;
            text-decoration: none;
            font-weight: bold;
        }

        /* Menampilkan error untuk validasi */
        .error {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>

        <!-- Menangani error jika ada error dalam validasi -->
        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form Login -->
        <form method="POST" action="{{ route('login.submit') }}">
            @csrf

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}"><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br><br>

            <input type="submit" class="login-btn" value="Login">
            <p class="b-link">Belum Punya Akun?<a href="{{ route('register') }}" class="login-link"> Sign Up</a></p>
        </form>
    </div>
</body>
</html>
