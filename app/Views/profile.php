<?php 
    require_once(APPPATH . 'Views/inc/header.php');
?>

<main class="container">

    <div class="page-header">
        <h1>User Accounts</h1>
        <p>List of system users.</p>
    </div>

    <div class="table-container">

        <table class="data-table">

            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Role</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($users as $user): ?>

                    <tr>
                        <td><?= esc($user['username']) ?></td>
                        <td><?= esc($user['full_name']) ?></td>
                        <td><?= esc($user['created_at']) ?></td>
                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</main>

<?php 
    require_once(APPPATH . 'Views/inc/footer.php');
?>