<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Permohonan Informasi - PPID Kecamatan Koto XI Tarusan</title>

    <link rel="stylesheet" href="permohonan.css">
</head>

<body>

<!-- HEADER -->
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
        <a href="permohonan.php" class="aktif">Permohonan</a>
        <a href="kontak.php">Kontak</a>
        <a href="login.php">Login</a>
    </nav>

</header>


<!-- BAGIAN JUDUL -->
<section class="hero-permohonan">

    <h1>Permohonan Informasi</h1>

    <p>
        Ajukan permohonan informasi publik
        kepada PPID Kecamatan Koto XI Tarusan
    </p>

</section>


<!-- FORM -->
<section class="container">

    <div class="form-box">

        <h2>Formulir Permohonan Informasi</h2>

        <p class="deskripsi">
            Silakan lengkapi data berikut dengan benar.
        </p>


        <form action="#" method="post">

            <div class="form-group">

                <label>Nama Lengkap</label>

                <input
                    type="text"
                    name="nama"
                    placeholder="Masukkan nama lengkap"
                    required
                >

            </div>


            <div class="form-group">

                <label>NIK</label>

                <input
                    type="text"
                    name="nik"
                    placeholder="Masukkan NIK"
                    required
                >

            </div>


            <div class="form-group">

                <label>Email</label>

                <input
                    type="email"
                    name="email"
                    placeholder="Masukkan email"
                    required
                >

            </div>


            <div class="form-group">

                <label>Nomor Telepon</label>

                <input
                    type="text"
                    name="telepon"
                    placeholder="Masukkan nomor telepon"
                    required
                >

            </div>


            <div class="form-group">

                <label>Alamat</label>

                <textarea
                    name="alamat"
                    rows="4"
                    placeholder="Masukkan alamat lengkap"
                    required
                ></textarea>

            </div>


            <div class="form-group">

                <label>Informasi yang Dimohon</label>

                <textarea
                    name="informasi"
                    rows="5"
                    placeholder="Tuliskan informasi yang ingin dimohon"
                    required
                ></textarea>

            </div>


            <div class="form-group">

                <label>Tujuan Permohonan</label>

                <textarea
                    name="tujuan"
                    rows="4"
                    placeholder="Tuliskan tujuan permohonan informasi"
                    required
                ></textarea>

            </div>


            <button type="submit" name="kirim" class="btn-kirim">
                Kirim Permohonan
            </button>

        </form>

    </div>


    <div class="info-permohonan">

        <h3>Informasi Permohonan</h3>

        <p>
            Pastikan data yang dimasukkan sudah benar sebelum
            mengirimkan permohonan informasi.
        </p>

        <p>
            Permohonan informasi akan diproses oleh PPID
            Kecamatan Koto XI Tarusan.
        </p>

    </div>

</section>


<!-- FOOTER -->
<footer>

    <p>© 2026 PPID Kecamatan Koto XI Tarusan</p>

</footer>

</body>
</html>