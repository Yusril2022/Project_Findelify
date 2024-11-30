


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Found Item</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/css/dash-style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url(); ?>/css/foundItem.css">
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
                <a href="/Pages">
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
            <li class="active">
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
            <div class="head-title">
                <div class="left">
                    <h1>Found Item</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Item</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Found</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="container">
                <ul class="box-info" style="list-style-type: none; padding: 0;">
                    <?php if (!empty($foundItems)): ?>
                        <?php foreach ($foundItems as $item): ?>
                            <li style="display: block; text-align: center; margin-bottom: 20px; cursor: pointer;" >
                                <div class="lost-item-card">
                                    <!-- Gambar -->
                                    <div class="image-container">
                                        <?php if ($item['image']): ?>
                                            <img src="/uploads/<?= $item['image'] ?>" alt="<?= $item['title'] ?>" class="item-post" style="width: 100%; border-radius: 10px;">
                                        <?php endif; ?>
                                    </div>

                                    <!-- Informasi -->
                                    <div class="text-container" style="padding: 10px; text-align: left;">
                                        <h3><?= esc($item['title']) ?></h3>
                                        <p class="description"><strong>Description:</strong> <?= esc($item['description']) ?></p>
                                        <p class="details"><strong>Date Found:</strong> <?= date('d F Y', strtotime($item['created_at'])) ?></p>
                                        <p class="details"><strong>Location:</strong> <?= esc($item['location']) ?></p>
                                        <p class="details"><strong>Contact:</strong> <?= esc($item['contact']) ?></p>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>No items have been marked as found.</p>
                    <?php endif; ?>
                </ul>
            </div>

        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->
</body>

</html>


<script src="<?= base_url(); ?>/js/script_foundItem.js"></script>