<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>

<body>

<header class="navbar">

    <div class="logo">Technical Formative Assessment One</div>

    <ul class="nav-links">
        <li><a href="<?= base_url('/') ?>">Home</a></li>
        <li><a href="<?= base_url('/about') ?>">About</a></li>
        <li><a href="<?= base_url('/customers') ?>">Customers</a></li>
        <li><a href="<?= base_url('/users') ?>">Users</a></li>
    </ul>

</header>

<main class="container">

    <div class="page-header">
        <h1>Customer Accounts</h1>
        <p>List of registered customers.</p>
    </div>

    <div class="table-container">

        <table class="data-table">

            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($customers as $customer): ?>

                    <tr>
                        <td><?= esc($customer['name']) ?></td>
                        <td><?= esc($customer['email']) ?></td>
                        <td><?= esc($customer['phone']) ?></td>
                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</main>

<footer class="footer">
    <p>&copy; 2026 Plata. All Rights Reserved.</p>
</footer>

</body>
</html>