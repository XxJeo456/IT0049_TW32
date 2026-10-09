<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($user) ? 'Edit User' : 'Add New User' ?></title>
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

<?php $isEdit = isset($user); ?>

<main class="container">
    <div class="page-header">
        <h1><?= $isEdit ? 'Edit User' : 'Add New User' ?></h1>
    </div>

    <div class="form-card">

        <?php if (session('errors')): ?>
            <div class="error-box">
                <?php foreach (session('errors') as $error): ?>
                    <p><?= esc($error) ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form method="post"
              enctype="multipart/form-data"
              action="<?= $isEdit
                    ? base_url('users/update/' . $user['id'])
                    : base_url('users/create') ?>">

            <?= csrf_field() ?>

            <label for="full_name">Full Name</label>
            <input type="text"
                   id="full_name"
                   name="full_name"
                   value="<?= old('full_name', $user['full_name'] ?? '') ?>">

            <label for="username">Username</label>
            <input type="text"
                   id="username"
                   name="username"
                   value="<?= old('username', $user['username'] ?? '') ?>">

            <label for="email">Email</label>
            <input type="email"
                   id="email"
                   name="email"
                   value="<?= old('email', $user['email'] ?? '') ?>">

            <?php if ($isEdit && ! empty($user['avatar'])): ?>
                <p>Current Profile Photo:</p>
                <img class="avatar-preview"
                     src="<?= base_url('uploads/avatars/' . $user['avatar']) ?>"
                     alt="Current profile photo">
            <?php endif; ?>

            <label for="avatar">
                <?= $isEdit ? 'Change Profile Photo (optional)' : 'Profile Photo (optional)' ?>
            </label>

            <input type="file"
                   id="avatar"
                   name="avatar"
                   accept=".jpg,.jpeg,.png,image/jpeg,image/png">

            <small>JPG or PNG only. Maximum file size: 2MB.</small>

            <br><br>

            <button type="submit" class="btn">
                <?= $isEdit ? 'Update User' : 'Save User' ?>
            </button>

            <a href="<?= base_url('users') ?>" class="btn btn-small">Cancel</a>
        </form>
    </div>
</main>

<footer class="footer">
    <p>&copy; 2026 Plata. All Rights Reserved.</p>
</footer>

</body>
</html>