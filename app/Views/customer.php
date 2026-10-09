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

    <div class="page-header page-header-row">
        <div>
            <h1>Customer Accounts</h1>
            <p>List of registered customers.</p>
        </div>

        <a href="<?= base_url('customers/new') ?>" class="btn">
            + Add New Customer
        </a>
    </div>

    <div class="table-container">
        <table class="data-table">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><?= esc($customer['full_name']) ?></td>
                        <td><?= esc($customer['email']) ?></td>
                        <td><?= esc($customer['phone']) ?></td>
                        <td>
                            <a href="<?= base_url('customers/edit/' . $customer['id']) ?>"
                               class="btn btn-small">
                                Edit
                            </a>
                        </td>
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