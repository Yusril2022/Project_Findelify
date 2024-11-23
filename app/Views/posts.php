<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost Item</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/css/dash-style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url(); ?>/css/lostItem.css">
</head>

<body>


    <!-- SIDEBAR -->
    <section id="sidebar" class="hide">
        <a href="#" class="brand">
            <i class='bx bx-desktop'></i>       

            <span class="text">Findelify</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="/Pages">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="active">
                <a href="#">
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
                        <span class="text">Yusril Mubaroq</span>
                        <span class="role">Tasikmalaya</span>
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
            <a href="#" class="notification" id="notification-icon" data-toggle="modal" data-target="notificationModal">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Lost Item</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Item</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Lost</a>
                        </li>
                    </ul>
                </div>
            </div>

            <ul class="box-info" style="list-style-type: none; padding: 0;">
                <?php if (isset($posts) && count($posts) > 0): ?>
                    <?php foreach ($posts as $post): ?>
                        <li style="display: block; text-align: center; margin-bottom: 20px; cursor: pointer;" onclick="window.location.href='/post/<?= $post['id'] ?>'">
                            <!-- Item -->
                            <div class="lost-item-card">
                                <!-- Gambar -->
                                <div class="image-container">
                                    <img src="/uploads/<?= $post['image'] ?>" alt="<?= $post['title'] ?>" class="item-post" style="width: 100%; border-radius: 10px;">
                                </div>

                                <!-- Informasi -->
                                <div class="text-container" style="padding: 10px; text-align: left;">
                                    <h3><?= esc($post['title']) ?></h3>
                                    <p class="description">Description: <?= esc($post['description']) ?></p>
                                    <p class="details"><strong>Date Lost:</strong> <?= date('d F Y', strtotime($post['created_at'])) ?></p>
                                    <p class="details"><strong>Location:</strong> <?= esc($post['location']) ?></p>
                                    <p class="details"><strong>Contact:</strong> <?= esc($post['contact']) ?></p>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Tidak ada!</p>
                <?php endif; ?>
            </ul>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->
</body>

</html>

<script src="<?= base_url(); ?>/js/script_lostItem.js"></script>