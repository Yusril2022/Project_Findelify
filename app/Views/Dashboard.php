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
        /* Kategori */
.categories {
    margin: 20px 0;
    padding: 15px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.categories h3 {
    margin-bottom: 10px;
    font-size: 20px;
    font-weight: bold;
}

.category-list {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.category-item {
    padding: 8px 15px;
    font-size: 14px;
    color: #ffffff;
    background-color: #3498db;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.category-item:hover {
    background-color: #2980b9;
}

/* Postingan Terbaru */
.latest-posts {
    margin: 30px 0;
    padding: 15px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.latest-posts h2 {
    margin-bottom: 15px;
    font-size: 24px;
    font-weight: bold;
    color: #333333;
}

.post-item {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    padding: 15px 0;
    border-bottom: 1px solid #eaeaea;
}

.post-item:last-child {
    border-bottom: none;
}

.post-item img {
    width: 80px;
    height: 80px;
    border-radius: 8px;
    object-fit: cover;
}

.post-info {
    flex: 1;
}

.post-info h3 {
    font-size: 18px;
    font-weight: bold;
    color: #333333;
    margin-bottom: 5px;
}

.post-info p {
    margin: 5px 0;
    font-size: 14px;
    color: #555555;
}

.post-info small {
    font-size: 12px;
    color: #888888;
}

.btn-detail {
    display: inline-block;
    margin-top: 10px;
    padding: 8px 15px;
    font-size: 14px;
    color: #ffffff;
    background-color: #2ecc71;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.btn-detail:hover {
    background-color: #27ae60;
}

/* Responsiveness */
@media (max-width: 768px) {
    .categories, .latest-posts {
        padding: 10px;
    }

    .category-item {
        font-size: 12px;
        padding: 5px 10px;
    }

    .post-item img {
        width: 60px;
        height: 60px;
    }

    .post-info h3 {
        font-size: 16px;
    }

    .post-info p {
        font-size: 12px;
    }

    .btn-detail {
        font-size: 12px;
        padding: 6px 10px;
    }
}

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
