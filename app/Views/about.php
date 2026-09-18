<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About - POS System</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body>

    <div class="container">

        <header>
            <h1>About POS System</h1>

            <nav>
                <a href="<?= site_url('/') ?>">Home</a>
                <a href="<?= site_url('about') ?>">About</a>
                <a href="<?= site_url('customers') ?>">Customers</a>
                <a href="<?= site_url('users') ?>">Users</a>
            </nav>
        </header>

        <div class="card">
            <h2>About This Project</h2>
            <p>
                This project is a basic Point-of-Sale (POS) system developed using
                CodeIgniter 4.
            </p>
            <p>
                It demonstrates the use of routes, controllers, views, and static
                PHP arrays following the Model-View-Controller (MVC) architecture.
            </p>
        </div>

        <footer>
            © 2026 Chi | Chiriemie Keith G. Rimando | TC37
        </footer>

    </div>

</body>

</html>