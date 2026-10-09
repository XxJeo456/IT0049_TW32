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
    </ul>

</header>

<?php $isEdit = isset($customer); ?>

<main class="container">
    <div class="page-header">
        <h1><?= $isEdit ? 'Edit Customer' : 'Add New Customer' ?></h1>
    </div>

    <div class="form-card">
        <form method="post"
              action="<?= $isEdit
                    ? base_url('customers/update/' . $customer['id'])
                    : base_url('customers/create') ?>">

            <?= csrf_field() ?>

            <label>Full Name</label>
            <input type="text" name="full_name"
                   value="<?= old('full_name', $customer['full_name'] ?? '') ?>">

            <label>Email</label>
            <input type="email" name="email"
                   value="<?= old('email', $customer['email'] ?? '') ?>">

            <label>Phone</label>
            <input type="text" name="phone"
                   value="<?= old('phone', $customer['phone'] ?? '') ?>">

            <button type="submit" class="btn">
                <?= $isEdit ? 'Update Customer' : 'Save Customer' ?>
            </button>
        </form>
    </div>
</main>

<footer class="footer">
    <p>&copy; 2026 Plata. All Rights Reserved.</p>
</footer>

</body>
</html>