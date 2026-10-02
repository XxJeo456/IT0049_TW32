<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Account Management System</title>

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
        </ul>
    </header>

    <main class="hero">
        <div class="hero-content">

            <h1>WEB</h1>

            <p>
                A simple web-based system for managing
                customer and user information.
            </p>

            <a href="<?= base_url('/customers') ?>" class="btn">
                View Customers
            </a>

        </div>
    </main>

    <footer class="footer">
        <p>&copy; 2026 Plata. All Rights Reserved.</p>
    </footer>

</body>
</html>