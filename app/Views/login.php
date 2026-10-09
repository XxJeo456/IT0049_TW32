<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>

<body>
    <header class="navbar">
        <div class="logo">Technical Formative Assessment</div>

        <ul class="nav-links">
            <li><a href="<?= base_url('/') ?>">Home</a></li>
            <li><a href="<?= base_url('/about') ?>">About</a></li>
            <li><a href="<?= base_url('/customers') ?>">Customers</a></li>
            <li><a href="<?= base_url('/users') ?>">Users</a></li>

            <?php if (session()->get('isLoggedIn')): ?>
                <li><a href="<?= base_url('/logout') ?>">Logout</a></li>
            <?php else: ?>
                <li><a href="<?= base_url('/login') ?>">Login</a></li>
            <?php endif; ?>
        </ul>
</header>

<main class="container">
    <div class="form-card login-card">
        <h1>Login</h1>

        <?php if (session('error')): ?>
            <div class="error-box">
                <p><?= esc(session('error')) ?></p>
            </div>
        <?php endif; ?>

        <form method="post" action="<?= base_url('login') ?>">
            <?= csrf_field() ?>

            <label for="username">Username</label>
            <input type="text"
                   id="username"
                   name="username"
                   value="<?= old('username') ?>">

            <label for="password">Password</label>
            <input type="password"
                   id="password"
                   name="password">

            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</main>

</body>
</html>