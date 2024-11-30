<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/css/register.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="/img/logo.png" width="170%" alt="">
        </div>
        <h1>Create an Account</h1>
        <form action="/auth/create" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Register</button>
        </form>
        <div class="link">
            <p>Already have an account? <a href="/login">Login here</a></p>
        </div>
    </div>
</body>
</html>
