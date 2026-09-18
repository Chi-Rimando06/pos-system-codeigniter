<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>POS System</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body>

    <div class="container">

        <h1>Welcome to POS System!</h1>

        <nav>
            <a href="<?= site_url('/') ?>">Home</a>
            <a href="<?= site_url('about') ?>">About</a>
            <a href="<?= site_url('customers') ?>">Customers</a>
            <a href="<?= site_url('users') ?>">Users</a>
        </nav>

        <div class="card">
            <h2>Point-of-Sale System</h2>
            <p>This is the landing page of the POS System.</p>
            <p>This project demonstrates routing, controllers, views, and static PHP arrays using CodeIgniter 4.</p>
        </div>

        <footer>
            © 2026 Chi | Chiriemie Keith G. Rimando | TC37
        </footer>

    </div>

</body>

</html>