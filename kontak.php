<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kontak PPID Kecamatan Koto XI Tarusan</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f7fa;
            color: #26384d;
        }

        /* HEADER */

        header {
            background: white;
            color: #26384d;
            padding: 15px 7%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo img {
            width: 55px;
            height: 55px;
            object-fit: contain;
        }

        .logo h2 {
            font-size: 24px;
            color: #26384d;
        }

        .logo p {
            font-size: 13px;
            color: #666;
        }

        nav {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        nav a {
            color: #26384d;
            text-decoration: none;
            font-size: 14px;
        }

        nav a:hover {
            color: #0b5ed7;
        }

        /* MENU AKTIF */

        nav a[href="kontak.php"] {
            color: #0b5ed7;
            font-weight: bold;
        }

        /* JUDUL */

        .judul {
            background: #f5f7fa;
            color: #26384d;
            text-align: center;
            padding: 60px 20px;
        }

        .judul h1 {
            font-size: 38px;
            margin-bottom: 10px;
            color: #26384d;
        }

        .judul p {
            font-size: 17px;
            color: #666;
        }

        /* KONTEN */

        .container {
            width: 85%;
            max-width: 1100px;
            margin: 40px auto;
        }

        .kontak {
            display: flex;
            gap: 30px;
        }

        .box {
            background: white;
            flex: 1;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.08);
        }

        .box h2 {
            color: #26384d;
            margin-bottom: 25px;
        }

        .item {
            margin-bottom: 25px;
        }

        .item h3 {
            color: #0b5ed7;
            margin-bottom: 7px;
        }

        .item p {
            line-height: 1.6;
            color: #555;
        }

        /* FORM */

        .box label {
            display: block;
            margin: 15px 0 7px;
            font-weight: bold;
            color: #26384d;
        }

        .box input,
        .box textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 7px;
            font-size: 14px;
            font-family: Arial, sans-serif;
        }

        .box input:focus,
        .box textarea:focus {
            outline: none;
            border-color: #0b5ed7;
        }

        .box textarea {
            resize: vertical;
        }

        .box button {
            width: 100%;
            padding: 13px;
            margin-top: 20px;
            background: #26384d;
            color: white;
            border: none;
            border-radius: 7px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }

        .box button:hover {
            background: #1d2c3d;
        }

        /* FOOTER */

        footer {
            margin-top: 60px;
            background: #26384d;
            color: white;
            text-align: center;
            padding: 20px;
        }

        /* HP */

        @media (max-width: 800px) {

            header {
                flex-direction: column;
                gap: 20px;
            }

            nav {
                justify-content: center;
                gap: 12px;
            }

            .kontak {
                flex-direction: column;
            }

        }

    </style>
</head>

<body>

<header>

    <div class="logo">

        <img src="gambar/logo.png" alt="Logo PPID">

        <div>
            <h2>PPID</h2>
            <p>Kecamatan Koto XI Tarusan</p>
        </div>

    </div>

    <nav>

        <a href="index.php">Beranda</a>
        <a href="profil.php">Profil PPID</a>
        <a href="informasi.php">Informasi Publik</a>
        <a href="layanan.php">Layanan</a>
        <a href="permohonan.php">Permohonan</a>
        <a href="kontak.php">Kontak</a>
        <a href="login.php">Login</a>

    </nav>

</header>


<section class="judul">

    <h1>Kontak PPID</h1>

    <p>
        Hubungi PPID Kecamatan Koto XI Tarusan
    </p>

</section>


<div class="container">

    <div class="kontak">

        <!-- INFORMASI KONTAK -->

        <div class="box">

            <h2>Informasi Kontak</h2>

            <div class="item">

                <h3>📍 Alamat</h3>

                <p>
                    Jl.Dr,Nagari Naggalo<br>
                    Kecamatan Koto XI Tarusan<br>
                    Sumatera Barat
                </p>

            </div>


            <div class="item">

                <h3>📞 Telepon</h3>

                <p>
                    (0756) XXXXXXX
                </p>

            </div>


            <div class="item">

                <h3>✉️ Email</h3>

                <p>
                    Koto XI Tarusan Kecamatan@gamil.com
                </p>

            </div>


            <div class="item">

                <h3>🕐 Jam Pelayanan</h3>

                <p>
                    Senin - Jumat<br>
                    08.00 - 16.00 WIB
                </p>

            </div>

        </div>


        <!-- FORM PESAN -->

        <div class="box">

            <h2>Kirim Pesan</h2>

            <form method="POST">

                <label>Nama</label>

                <input
                    type="text"
                    name="nama"
                    placeholder="Masukkan nama"
                    required
                >

                <label>Email</label>

                <input
                    type="email"
                    name="email"
                    placeholder="Masukkan email"
                    required
                >

                <label>Nomor HP</label>

                <input
                    type="text"
                    name="no_hp"
                    placeholder="Masukkan nomor HP"
                >

                <label>Pesan</label>

                <textarea
                    name="pesan"
                    rows="6"
                    placeholder="Tulis pesan..."
                    required
                ></textarea>

                <button type="submit">
                    KIRIM PESAN
                </button>

            </form>

        </div>

    </div>

</div>


<footer>

    <p>
        © 2026 PPID Kecamatan Koto XI Tarusan
    </p>

</footer>

</body>
</html>