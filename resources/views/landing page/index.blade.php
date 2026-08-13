<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Sekolah</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f7fa;
        }

        .navbar {
            background-color: #ffffff;
            padding: 15px 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 20px;
            font-weight: bold;
            color: #1e3a8a;
        }

        .logo img {
            width: 45px;
            height: 45px;
            object-fit: contain;
        }

        .btn-login {
            background-color: #1e3a8a;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 6px;
        }

        .hero {
            min-height: 500px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 60px 80px;
        }

        .hero-text {
            max-width: 550px;
        }

        .hero-text h1 {
            font-size: 42px;
            color: #1e3a8a;
            margin-bottom: 20px;
        }

        .hero-text p {
            font-size: 18px;
            color: #555;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .btn-mulai {
            display: inline-block;
            background-color: #1e3a8a;
            color: white;
            padding: 13px 25px;
            text-decoration: none;
            border-radius: 6px;
        }

        .hero-image img {
            width: 350px;
        }

        .footer {
            text-align: center;
            padding: 20px;
            background-color: #1e3a8a;
            color: white;
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('images/logo inventory.png') }}" alt="Logo Inventory">
            <span>Inventory Sekolah</span>
        </div>

    <a href="{{ route('user.index') }}" class="btn-login">Login</a>    
    </nav>

    <section class="hero">
        <div class="hero-text">
            <h1>Sistem Informasi Inventory Sekolah</h1>

            <p>
                Selamat datang di sistem informasi inventory sekolah SMK Informatika Utama.
                Sistem ini digunakan untuk membantu pengelolaan data barang,
                kategori, dan jenis barang.
            </p>

        <a href="{{ route('user.index') }}" class="btn-mulai">Mulai Sekarang</a>        
        </div>

        <div class="hero-image">
            <img src="{{ asset('images/logo inventory.png') }}" alt="Inventory">
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2026 Inventory SMK Informatika Utama</p>
    </footer>

</body>
</html>