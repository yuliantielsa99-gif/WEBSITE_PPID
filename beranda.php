<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PPID Kecamatan Koto XI Tarusan</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f5f7fa;
            color: #333;
        }


        /* ================= HEADER ================= */

        header {
            background-color: white;
            color: #333;
            padding: 18px 60px;

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

        .logo-box {
            width: 50px;
            height: 50px;

            background-color: white;
            color: #0b5ed7;

            border: 2px solid #0b5ed7;
            border-radius: 8px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-weight: bold;
        }

        .logo h2 {
            font-size: 20px;
            color: #26384d;
        }

        .logo p {
            font-size: 13px;
            color: #555;
            margin-top: 3px;
        }


        /* ================= NAVIGASI ================= */

        nav a {
            color: #26384d;
            text-decoration: none;

            margin-left: 25px;
            font-size: 15px;

            transition: 0.3s;
        }

        nav a:hover {
            color: #0b5ed7;
        }


        /* ================= HERO ================= */

        .hero {

            /* FOTO TANPA WARNA BIRU */
            background: url("gambar kantor camat.jpeg") center/cover no-repeat;

            min-height: 430px;

            display: flex;
            align-items: center;
            justify-content: center;

            text-align: center;

            color: white;

            padding: 40px 20px;
        }

        .hero-content {
            max-width: 900px;
        }

        .hero h1 {
            font-size: 40px;
            margin-bottom: 15px;

            text-shadow: 2px 2px 5px rgba(0,0,0,0.7);
        }

        .hero p {
            font-size: 18px;
            line-height: 1.6;

            text-shadow: 2px 2px 5px rgba(0,0,0,0.7);
        }


        /* ================= BUTTON ================= */

        .btn {
            display: inline-block;

            margin-top: 18px;

            padding: 12px 25px;

            background-color: #0b5ed7;
            color: white;

            text-decoration: none;

            border-radius: 6px;

            font-size: 15px;

            transition: 0.3s;
        }

        .btn:hover {
            background-color: #084298;
        }


        /* ================= LAYANAN ================= */

        .layanan {
            padding: 55px 60px;

            text-align: center;

            background-color: #f5f7fa;
        }

        .layanan h2 {
            font-size: 30px;
            color: #26384d;

            margin-bottom: 10px;
        }

        .layanan > p {
            margin-bottom: 35px;

            color: #666;

            font-size: 16px;
        }


        /* ================= CARD ================= */

        .cards {

            display: flex;

            justify-content: center;

            gap: 25px;

            flex-wrap: wrap;
        }

        .card {

            background-color: white;

            width: 320px;

            padding: 30px 25px;

            border-radius: 10px;

            box-shadow: 0 3px 15px rgba(0,0,0,0.10);

            transition: 0.3s;
        }

        .card:hover {

            transform: translateY(-5px);

            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }

        .card h3 {

            color: #26384d;

            margin-bottom: 12px;

            font-size: 20px;
        }

        .card p {

            line-height: 1.7;

            color: #666;

            font-size: 15px;
        }


        /* ================= TENTANG ================= */

        .tentang {

            background-color: white;

            padding: 50px 60px;

            text-align: center;
        }

        .tentang h2 {

            color: #26384d;

            margin-bottom: 20px;
        }

        .tentang p {

            max-width: 850px;

            margin: auto;

            line-height: 1.8;

            color: #555;
        }


        /* ================= FOOTER ================= */

        footer {

            background-color: #26384d;

            color: white;

            text-align: center;

            padding: 25px;

            line-height: 1.8;
        }


        /* ================= RESPONSIVE ================= */

        @media (max-width: 768px) {

            header {

                flex-direction: column;

                gap: 20px;

                padding: 20px;
            }

            nav {

                text-align: center;
            }

            nav a {

                margin: 0 7px;

                font-size: 13px;
            }

            .hero {

                min-height: 400px;
            }

            .hero h1 {

                font-size: 30px;
            }

            .hero p {

                font-size: 16px;
            }

            .layanan,
            .tentang {

                padding: 40px 20px;
            }

            .card {

                width: 100%;

                max-width: 350px;
            }

        }

    </style>

</head>


<body>


<!-- ================= HEADER ================= -->

<header>

    <div class="logo">

        <div class="logo-box">
            PPID
        </div>

        <div>

            <h2>PPID Kecamatan</h2>

            <p>Koto XI Tarusan</p>

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



<!-- ================= HERO ================= -->

<section class="hero">

    <div class="hero-content">

        <h1>
            Selamat Datang di PPID
        </h1>


        <p>
            Pejabat Pengelola Informasi dan Dokumentasi
            Kecamatan Koto XI Tarusan
        </p>


        <p>
            Menyediakan informasi publik secara mudah,
            cepat, transparan, dan akuntabel kepada masyarakat.
        </p>


        <a href="informasi.php" class="btn">
            Lihat Informasi Publik
        </a>

    </div>

</section>



<!-- ================= LAYANAN ================= -->

<section class="layanan">

    <h2>
        Layanan PPID
    </h2>


    <p>
        Beberapa layanan informasi yang tersedia
        bagi masyarakat Kecamatan Koto XI Tarusan.
    </p>


    <div class="cards">


        <!-- CARD 1 -->

        <div class="card">

            <h3>
                Informasi Publik
            </h3>

            <p>
                Masyarakat dapat memperoleh berbagai
                informasi publik yang tersedia pada
                Kecamatan Koto XI Tarusan.
            </p>

        </div>



        <!-- CARD 2 -->

        <div class="card">

            <h3>
                Permohonan Informasi
            </h3>

            <p>
                Ajukan permohonan informasi publik
                melalui layanan PPID secara mudah
                dan terstruktur.
            </p>

        </div>



        <!-- CARD 3 -->

        <div class="card">

            <h3>
                Dokumentasi
            </h3>

            <p>
                Menyediakan dokumentasi dan informasi
                terkait kegiatan serta pelayanan
                Kecamatan Koto XI Tarusan.
            </p>

        </div>


    </div>

</section>



<!-- ================= TENTANG ================= -->

<section class="tentang">

    <h2>
        Tentang PPID Kecamatan Koto XI Tarusan
    </h2>


    <p>

        PPID Kecamatan Koto XI Tarusan merupakan bagian
        dari pelayanan informasi publik yang bertujuan
        memberikan kemudahan kepada masyarakat dalam
        memperoleh informasi yang dibutuhkan.

        Melalui website ini, masyarakat dapat melihat
        informasi publik, mengajukan permohonan informasi,
        serta mendapatkan informasi mengenai pelayanan
        Kecamatan Koto XI Tarusan.

    </p>

</section>



<!-- ================= FOOTER ================= -->

<footer>

    <p>
        © 2026 PPID Kecamatan Koto XI Tarusan
    </p>

    <p>
        Pelayanan Informasi Publik
    </p>

</footer>


</body>

</html>