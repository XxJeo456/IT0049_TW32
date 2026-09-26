<?php 
    require_once(APPPATH . 'Views/inc/header.php');
?>
    <main class="hero">
        <div class="hero-content">

            <h1>Todays Task</h1>

            <p>
                A simple web-based system for managing
                customer and user information.
            </p>

            <a href="<?= base_url('/customers') ?>" class="btn">
                View all
            </a>

        </div>
    </main>

<?php 
    require_once(APPPATH . 'Views/inc/footer.php');
?>