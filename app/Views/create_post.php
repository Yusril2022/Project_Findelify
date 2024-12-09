<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Postingan Baru</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/css/dash-style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url(); ?>/css/createPost.css">
    <style>
        
    </style>

</head>

<body>
   
    <!-- SIDEBAR -->
    <section id="sidebar" class="hide">
        <a href="#" class="brand">
        <img src="/img/logo.png" alt="Logo Icon" class="logo" >

            <span class="text">Findelify</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="/dashboard">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/posts">
                    <i class='bx bx-search-alt'></i>
                    <span class="text">Lost Item</span>
                </a>
            </li>
            <li>
                <a href="/found-items">
                    <i class='bx bx-box'></i>
                    <span class="text">Found Item</span>
                </a>
            </li>
        </ul>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <ul class="side-menu">
            <li class="active">
                <a href="/manageAccount">
                    <img src="/img/prof.png" alt="Profile Image" class="profile-pic">
                    <div style="display: flex; flex-direction: column;">
                    <span class="text"><?= session()->get('username') ?? 'Guest'; ?></span>
                        <span class="role">Karawang</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/" class="logout" id="logout-link">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>

            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <!-- <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a> -->
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
    <div class="profile-container">
        <!-- Bagian Header Profil -->
        <div class="profile-header">

            <div class="profile-details">
                <img src="/img/prof.png" alt="Foto Profil" class="profile-avatar">
                <div class="profile-info">
                    <h2><?= session()->get('username') ?? 'Guest'; ?></h2>
                    <p class="profile-location">📍 Karawang, Indonesia</p>
                    <p class="profile-description">"Selalu membantu menemukan yang hilang dan memberikan yang terbaik untuk komunitas."</p>
                    <button class="edit-profile-btn">Edit Profil</button>
                </div>
            </div>
        </div>

        <!-- Statistik Pengguna -->
        <div class="profile-stats">
            <div class="stat-item">
                <h3>🔍 Postingan Hilang</h3>
                <p>12</p>
            </div>
            <div class="stat-item">
                <h3>🎉 Postingan Ditemukan</h3>
                <p>8</p>
            </div>
            <div class="stat-item">
                <h3>⚡ Aktivitas</h3>
                <p>15</p>
            </div>
        </div>

        <!-- Form Postingan Baru -->
        <div class="profile-post-form">
            <h3>Buat Postingan Baru</h3>
            <form action="/post/store" method="post" enctype="multipart/form-data">
                <label for="title">Judul:</label>
                <input type="text" id="title" name="title" placeholder="Masukkan judul..." required>

                <label for="description">Deskripsi:</label>
                <textarea id="description" name="description" rows="4" placeholder="Deskripsikan barang yang hilang atau ditemukan..." required></textarea>

                <label for="location">Lokasi:</label>
                <input type="text" name="location" id="location" placeholder="Masukkan lokasi kejadian...">

                <label for="contact">Kontak:</label>
                <input type="text" name="contact" id="contact" placeholder="Masukkan informasi kontak...">

                <label for="image">Unggah Gambar:</label>
                <input type="file" id="image" name="image" accept="image/*" required>

                <button type="submit" class="submit-post-btn">Buat Postingan</button>
            </form>
        </div>
    </div>
</main>


        <!-- MAIN -->
    </section>
    <!-- CONTENT -->





</body>

</html>

<script src="<?= base_url(); ?>/js/script_createPost.js"></script>