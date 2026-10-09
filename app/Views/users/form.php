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

<?php $isEdit = isset($user); ?>

<main class="container">
    <div class="page-header">
        <h1><?= $isEdit ? 'Edit User' : 'Add New User' ?></h1>
    </div>

    <div class="form-card">
        <form method="post"
              enctype="multipart/form-data"
              action="<?= $isEdit
                    ? base_url('users/update/' . $user['id'])
                    : base_url('users/create') ?>">

            <?= csrf_field() ?>

            <label>Full Name</label>
            <input type="text" name="full_name"
                   value="<?= old('full_name', $user['full_name'] ?? '') ?>">

            <label>Username</label>
            <input type="text" name="username"
                   value="<?= old('username', $user['username'] ?? '') ?>">

            <label>Email</label>
            <input type="email" name="email"
                   value="<?= old('email', $user['email'] ?? '') ?>">

            <?php if ($isEdit && ! empty($user['avatar'])): ?>
                <p>Current Profile Photo:</p>
                <img class="avatar-preview"
                     src="<?= base_url('uploads/avatars/' . $user['avatar']) ?>"
                     alt="Current profile photo">
            <?php endif; ?>

            <label>
                <?= $isEdit ? 'Change Profile Photo (optional)' : 'Profile Photo (optional)' ?>
            </label>

            <input type="file"
                   name="avatar"
                   accept=".jpg,.jpeg,.png,image/jpeg,image/png">

            <small>JPG or PNG only. Maximum file size: 2MB.</small>

            <button type="submit" class="btn">
                <?= $isEdit ? 'Update User' : 'Save User' ?>
            </button>
        </form>
    </div>
</main>

<footer class="footer">
    <p>&copy; 2026 Plata. All Rights Reserved.</p>
</footer>

</body>
</html>