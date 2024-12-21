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
            justify-content: flex-end;
        }

        /* Mengatur teks utama */
        h1 {
            position: absolute;
            top: 10%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 2em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            text-align: center;
            width: 100%;
        }

        /* Container untuk tombol */
        .button-container {
            margin: 20px;
        }

        /* Tombol login */
        .login-btn {
            display: block;
            width: 170px;
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

        /* Link signup */
        .signup-link {
            font-size: 0.9em;
            color: #2ecc71;
            text-decoration: none;
            font-weight: bold;
        }        
        .b-link {
            font-size: 0.9em;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        /* Posisi kiri bawah */
        .left-bottom {
            position: absolute;
            bottom: 10%;
            left: 5%;
        }
    </style>
</head>
<body>
    <!-- Teks utama -->
    <h1>Sistem Pemberian Pakan Kucing Peliharaan Secara Otomatis</h1>

    <!-- Tombol dan link -->
    <div class="left-bottom">
        <div class="button-container">
            <a href="login" class="login-btn">LOGIN</a>
        <p class="b-link">Belum Punya Akun?<a href="register" class="signup-link"> Sign Up</a></p>
        </div>
    </div>
</body>
</html>
