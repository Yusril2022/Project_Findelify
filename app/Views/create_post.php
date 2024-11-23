<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Postingan Baru</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/css/dash-style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url(); ?>/css/createPost.css">

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
                        <span class="text">Yusril Mubaroq</span>
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
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="profile-container">
                
                    <form action="/post/store" method="post" enctype="multipart/form-data">
                                    <label for="title">Judul:</label>
                                    <input type="text" id="title" name="title" required>

                                    <label for="description">Deskripsi:</label>
                                    <textarea id="description" name="description" rows="4" required></textarea>

                                    <label for="location">Location</label>
                                    <input type="text" name="location" id="location">

                                    <label for="contact">Contact</label>
                                    <input type="text" name="contact" id="contact">

                                    <label for="image">Unggah Gambar:</label>
                                    <input type="file" id="image" name="image" accept="image/*" required>

                                    <button type="submit">Buat Postingan</button>
                                </form>

            </div>


        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->





</body>

</html>

<script src="<?= base_url(); ?>/js/script_createPost.js"></script>