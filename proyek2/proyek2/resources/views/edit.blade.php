<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* Styling Umum */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #6a5acd, #9370db);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Container Utama */
        .profile-container {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            width: 400px;
            padding: 30px;
            text-align: center;
        }

        /* Icon Profil */
        .profile-container .profile-icon {
            width: 100px;
            height: 100px;
            background-color: #f2f2f2;
            border-radius: 50%;
            margin: 0 auto 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .profile-container .profile-icon img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-container .profile-icon input[type="file"] {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        /* Judul Tambah Profil */
        .profile-container h2 {
            font-size: 1.2rem;
            color: #32cd32; /* Warna hijau */
            margin-bottom: 20px;
        }

        /* Form Input */
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            font-weight: 600;
            color: #555;
        }

        .form-group input, 
        .form-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 0.9rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f8f8f8;
            color: #333;
            outline: none;
            transition: border 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border: 1px solid #6a5acd;
        }

        /* Tombol Simpan */
        .btn-submit {
            display: inline-block;
            width: 100%;
            padding: 10px;
            background-color: #6a5acd;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #5a4cbf;
            transform: scale(1.03);
        }
    </style>
</head>
<body>
    <!-- Container Utama -->
    <div class="profile-container">
        <!-- Icon Profil -->
        <div class="profile-icon">
            <!-- Foto profil default atau yang sudah diupload -->
            <img id="profileImage" src="https://cdn-icons-png.flaticon.com/512/847/847969.png" alt="User Icon">
            <!-- Input file untuk memilih foto -->
            <input type="file" id="fileInput" accept="image/*" onchange="previewImage(event)">
        </div>

        <!-- Judul -->
        <h2>Tambah Profil</h2>

        <!-- Form -->
        <form method="POST" action="#">
    <div class="form-group">
        <label for="ownerName">Nama Pemilik</label>
        <input type="text" id="ownerName" name="ownerName" placeholder="Masukkan nama pemilik" required>
    </div>
    <div class="form-group">
        <label for="catName">Nama Kucing</label>
        <input type="text" id="catName" name="catName" placeholder="Masukkan nama kucing" required>
    </div>
    <div class="form-group">
        <label for="phone">No. Telepon</label>
        <input type="tel" id="phone" name="phone" placeholder="Masukkan nomor telepon" required>
    </div>
    <div class="form-group">
        <label for="address">Alamat</label>
        <textarea id="address" name="address" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>
    </div>

    <button type="submit" class="btn-submit">Simpan</button>
</form>

<script>
    // Menangani submit form dan pengalihan halaman
    document.querySelector('.btn-submit').addEventListener('click', function(event) {
        event.preventDefault();  // Mencegah form dikirim
        // Menyimpan data atau melakukan aksi lainnya jika diperlukan
        // Mengalihkan ke halaman utama
        window.location.href = '/main'; // Ganti '/' dengan URL halaman utama Anda
    });
</script>

    </div>

    <script>
        // Fungsi untuk menampilkan gambar profil yang dipilih
        function previewImage(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function() {
                const img = document.getElementById('profileImage');
                img.src = reader.result; // Menampilkan gambar yang dipilih
            };

            if (file) {
                reader.readAsDataURL(file); // Membaca file sebagai URL data
            }
        }
    </script>
</body>
</html>
