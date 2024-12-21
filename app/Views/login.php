<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/css/login.css"> 
    <style>
        
    </style>
<body>
    <div class="container">
        <div class="logo">
            <img src="/img/logo.png" width="170%" alt="">
        </div>
        <h1>Welcome Back</h1>
        <form action="/auth/loginProcess" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <div class="link">
            <p>Don't have an account? <a href="/auth/register">Register here</a></p>
        </div>
    </div>
    <!-- Notifikasi -->
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div id="notification" class="notification <?= session()->getFlashdata('status') ?? '' ?>">
            <img src="/img/logo.png" alt="Alert Icon">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <script>
        // Ambil elemen notifikasi
        const notification = document.getElementById('notification');

        if (notification) {
            setTimeout(() => {
                notification.classList.add('show');
            }, 100); // Delay 100ms agar smooth

            setTimeout(() => {
                notification.classList.add('hide'); 
            }, 3000); // Tampilkan selama 3 detik

            setTimeout(() => {
                notification.remove();
            }, 3500);
        }
    </script>
</body>

</html>

