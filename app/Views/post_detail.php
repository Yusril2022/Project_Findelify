<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $post['title'] ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>/css/dash-style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url(); ?>/css/postDetail.css">
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
            <li class="active">
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
                    <h1>Lost Item</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Item</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#"><?= $post['title'] ?></a>
                        </li>
                    </ul>
                </div>
            </div>

            <ul style="list-style-type: none; padding: 0;">
                <li style="display: block; text-align: center; margin-bottom: 20px; cursor: pointer;" onclick="openModall()">
                    <div class="lost-item-card">
                        <div class="image-container">
                            <img src="/uploads/<?= $post['image'] ?>" alt="<?= $post['title'] ?>" class="item-post">
                        </div>
                        <div class="text-container">
                            <p class="description"><?= $post['description'] ?></p>
                            <p class="details"><strong>Date Lost:</strong> <?= date('d F Y', strtotime($post['created_at'])) ?></p>
                            <p class="details"><strong>Location:</strong> <?= $post['location'] ?? '[Location not specified]' ?></p>
                            <p class="details"><strong>Contact:</strong> <?= $post['contact'] ?? '[Contact not specified]' ?></p>
                            <!-- Tombol Menandai Sudah Ditemukan -->
                            <?php if (!$post['is_found']): ?>
                                <form action="/post/markAsFound/<?= $post['id'] ?>" method="post">
                                    <button class="mark-as-found" type="submit">
                                        <span class="original">Lost!</span>
                                        <span class="hover">Found!</span>
                                    </button>
                                </form>
                            <?php else: ?>
                                <p style="font-family: Arial, sans-serif;
                                          font-size: 16px;
                                          color: green;
                                          background-color: #e6ffe6;
                                          border: 2px solid green;
                                          padding: 10px;
                                          border-radius: 5px;
                                          display: inline-block;"><strong>Status:</strong> This item has been found.</p>
                            <?php endif; ?>
                        </div>

                    </div>
                </li>
            </ul>

            <h2>Comments</h2>
            <div class="comment-container">
                <?php foreach ($comments as $comment): ?>
                    <div class="comment <?= ($comment['user_id'] == session()->get('user_id')) ? 'user' : 'system' ?>">
                        <div class="bubble <?= ($comment['user_id'] == session()->get('user_id')) ? 'user' : 'system' ?>">
                            <?= esc($comment['user_name']) ?>: <?= esc($comment['comment']) ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>


            <h3>Add Comment</h3>
            <form action="/comment" method="post" class="comment-form">
                <input type="hidden" name="post_id" value="<?= $post['id'] ?>">
                <textarea name="comment" placeholder="Tulis Komentarmu" rows="1" required></textarea>
                <button type="submit">Send</button>
            </form>

            <!-- <div class="button-container">
                <a href="/posts">Back to Posts</a>
            </div> -->
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->
</body>

</html>

<script src="<?= base_url(); ?>/js/script_postDetail.js"></script>