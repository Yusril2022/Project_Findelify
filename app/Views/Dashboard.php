<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/css/dash-style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url(); ?>/css/lostItem.css">
    <style>
        
    </style>
</head>

<body>
    

    <!-- SIDEBAR -->
    <section id="sidebar" class="hide">
        <a href="#" class="brand">
            <img src="/img/logo.png" alt="Logo Icon" class="logo">       
            <span class="text">Findelify</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
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
            <li>
                <a href="/post/create">
                    <img src="/img/prof.png" alt="Profile Image" class="profile-pic">
                    <div style="display: flex; flex-direction: column;">
                        <span class="text"><?= session()->get('username') ?? 'Guest'; ?></span>
                        <span class="role">Karawang</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/login" class="logout" id="logout-link">
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
            <form action="<?= site_url('search') ?>" method="get">
                <div class="form-input">
                    <input type="search" name="query" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <!-- Notifikasi -->
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div id="notification" class="notification">
            <!-- Tambahkan gambar logo -->
            <img src="/img/logo.png" alt="Success Logo">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Findelify</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Kategori -->
            <section class="categories">
                <h3>Kategori</h3>
                <div class="category-list">
                    <a href="?category=electronics" class="category-item">Elektronik</a>
                    <a href="?category=documents" class="category-item">Dokumen</a>
                    <a href="?category=accessories" class="category-item">Aksesori</a>
                    <a href="?category=pets" class="category-item">Hewan Peliharaan</a>
                </div>
            </section>

            <!-- Postingan Terbaru -->
            <section class="latest-posts">
                <h2>Postingan Terbaru</h2>
                <?php if (!empty($posts)): ?>
                    <?php foreach ($posts as $post): ?>
                        <div class="post-item">
                            <img src="<?= base_url('uploads/' . $post['image']); ?>" alt="Foto Barang">
                            <div class="post-info">
                                <h3><?= esc($post['title']); ?></h3>
                                <p><?= esc(substr($post['description'], 0, 100)); ?>...</p>
                                <p><small>Diposting oleh: Yusril</small></p>
                                <a href="/post/<?= esc($post['id']); ?>" class="btn-detail">Detail</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Tidak ada postingan terbaru.</p>
                <?php endif; ?>
            </section>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->
</body>

</html>

<script src="<?= base_url(); ?>/js/script_lostItem.js"></script>
<script>
       
    </script>
