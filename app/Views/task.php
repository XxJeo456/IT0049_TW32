<?php 
    require_once(APPPATH . 'Views/inc/header.php');
?>

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
                        <td><?= esc($customer['full_name']) ?></td>
                        <td><?= esc($customer['email']) ?></td>
                        <td><?= esc($customer['phone']) ?></td>
                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</main>

<?php 
    require_once(APPPATH . 'Views/inc/footer.php');
?>