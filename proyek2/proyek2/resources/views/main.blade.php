<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang Pecinta Kucing</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styling Umum */
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            font-family: Arial, sans-serif;
            overflow: hidden;
            position: relative;
        }

        /* Efek blur pada gambar latar */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('images/kucing.jpg') no-repeat center center fixed;
            background-size: cover;
            filter: blur(8px); /* Blur hanya untuk gambar */
            z-index: -1; /* Tetap di belakang semua elemen */
        }

        /* Sidebar styling */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100%;
            background-color: #6a5acd; /* Warna sidebar */
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 20px;
            z-index: 10; /* Tetap di atas layer blur */
            transform: translateX(-100%); /* Sidebar tersembunyi awalnya */
            transition: transform 0.5s ease;
        }

        .sidebar.show {
            transform: translateX(0); /* Muncul dengan animasi */
        }

        .sidebar a {
            text-decoration: none;
            color: white;
            font-size: 1.1rem;
            margin: 10px 0;
            transition: all 0.3s ease;
            padding: 8px 12px;
            border-radius: 5px;
        }

        .sidebar a:hover {
            background-color: #483d8b;
            transform: translateX(5px);
        }

        /* Main content */
        .main-content {
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            height: 100%;
            z-index: 5;
        }

        .main-content h1 {
            font-size: 3.5rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        /* Tombol */
        .start-button {
            margin-top: 30px;
            padding: 10px 20px;
            font-size: 1.2rem;
            border: none;
            border-radius: 5px;
            background-color: #6a5acd;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .start-button:hover {
            background-color: #483d8b;
            transform: scale(1.05);
        }

        /* Animasi muncul */
        .fade-out {
            animation: fadeOut 0.5s forwards;
        }

        @keyframes fadeOut {
            from { opacity: 1; }
            to { opacity: 0; }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <h4 class="text-center mb-4"></h4>
        <a href="#">Halaman Utama</a>
        <a href="#">Atur Penjadwalan Pakan</a>
        <a href="#">Lihat Notifikasi</a>
        <a href="/edit">Edit Profil</a>
    </div>

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <div>
            <h1>Selamat Datang Pecinta Kucing</h1>
            <p class="fs-5">Mengatur pemberian pakan kucing Anda kini lebih mudah dan efisien!</p>
            <button class="start-button" id="startButton">Mulai Sekarang</button>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        const startButton = document.getElementById("startButton");
        const sidebar = document.getElementById("sidebar");
        const mainContent = document.getElementById("mainContent");

        // Event listener untuk tombol
        startButton.addEventListener("click", () => {
            sidebar.classList.add("show"); // Tampilkan sidebar
            mainContent.classList.add("fade-out"); // Hilangkan main content dengan animasi
            setTimeout(() => {
                mainContent.style.display = "none"; // Hapus elemen dari tampilan setelah animasi selesai
            }, 500); // Waktu animasi fade-out (0.5 detik)
        });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
