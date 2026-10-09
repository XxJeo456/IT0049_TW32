<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Accounts</title>
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

<main class="container">

    <div class="page-header page-header-row">
        <div>
            <h1>User Accounts</h1>
            <p>List of system users.</p>
        </div>

        <a href="<?= base_url('users/new') ?>" class="btn">+ Add New User</a>
    </div>

    <div class="table-container">
        <table class="data-table">
            <thead>
                <tr>
                    <th>Profile Photo</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Date Created</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($users as $user): ?>
                    <?php
                        $avatar = ! empty($user['avatar'])
                            ? base_url('uploads/avatars/' . $user['avatar'])
                            : base_url('images/avatar-placeholder.png');
                    ?>

                    <tr>
                        <td>
                            <img src="<?= esc($avatar) ?>"
                                 alt="Profile photo"
                                 class="avatar-image">
                        </td>
                        <td><?= esc($user['full_name']) ?></td>
                        <td><?= esc($user['username']) ?></td>
                        <td><?= esc($user['created_at']) ?></td>
                        <td>
                            <a href="<?= base_url('users/edit/' . $user['id']) ?>"
                               class="btn btn-small">
                                Edit / Change Photo
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