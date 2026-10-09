<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - PPID</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="login-container">

    <div class="login-box">

        <h2>Login Admin</h2>
        <p>PPID Kecamatan Koto XI Tarusan</p>

        <form action="proses_login.php" method="POST">

            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan username" required>

            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan password" required>

            <button type="submit">LOGIN</button>

        </form>

        <a href="index.php" class="kembali">← Kembali ke Beranda</a>

    </div>

</div>

</body>
</html>
