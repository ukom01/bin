<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Jurusan</title>
    <link rel="stylesheet" href="src/css/index.css">
</head>

<body>
    <header>
        <h1>Website Jurusan RPL</h1>
        <div class="auth-links">
            <a href="#login" onclick="openLoginOverlay()">Login</a>
        </div>
    </header>
    <nav>
        <a href="#home">Home</a>
        <a href="#nilai">Nilai Siswa</a>
        <a href="#mapel">Jadwal Mapel</a>
        <a href="#guru">Data Guru</a>
        <a href="#siswa">Data Siswa</a>
    </nav>
    <section id="home" class="active-section">
        <div class="dashboard-container">
            <div class="dashboard-item" id="home">
                <div class="home-image">
                    <h2>Rekayasa Perangkat Lunak SMK Negeri 5 Kota Bekasi</h2>
                </div>
                <div class="description">
                    <p><strong>Rekayasa Perangkat Lunak</strong></p>
                    <p>Rekayasa Perangkat Lunak atau biasa disingkat dengan RPL adalah salah satu bidang profesi dan
                        juga mata pelajaran yang mempelajari tentang pengembangan perangkat-perangkat lunak termasuk
                        dalam hal pembuatannya, pemeliharaan hingga manajemen organisasi dan manajemen kualitasnya.
                        Salah Satunya dalam pengembangan pembuatan Aplikasi Website, Komputer, Android dan Editing Video
                        maupun Desain Logo.</p>
                </div>
                <div class="contact-info">
                    <p><strong>Alamat:</strong>Jl. Contoh No. 123, Kota Bekasi</p>
                    <p><strong>Email:</strong>info@smkn5bekasi.com</p>
                    <p><strong>Phone:</strong>(021) 123456789</p>
                </div>
            </div>
        </div>
    </section>
    <section id="event">

    </section>
    <section id="mapel">

    </section>
    <section id="guru">

    </section>
    <section id="siswa">

    </section>
    <footer>
        &copy; 2024 SMK Negeri 5 Kota Bekasi
    </footer>

    <form action="login.php" method="post" class="overlay" id="loginOverlay">
        <div class="login-form">
            <h2>Login</h2>
            <label for="loginUsername">Username :</label>
            <input type="text" name="username" required>
            <label for="loginPassword">Password :</label>
            <input type="password" name="password" required>
            <label for="loginUsername">Login Sebagai :</label>
            <input type="text" id="loginLevel" name="level" required>
            <button type="submit">Login</button>
            <button onclick="closeLoginOverlay()">Kembali</button>
        </div>
    </form>
    <script src="src/js/index.js"></script>
</body>
</html>