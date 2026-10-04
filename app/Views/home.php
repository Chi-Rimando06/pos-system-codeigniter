<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>POS System</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body>

    <div class="home-wrapper">

        <h1 class="page-title">Welcome to POS System!</h1>

        <nav>
            <a href="<?= site_url('/') ?>" class="active">Home</a>
            <a href="<?= site_url('about') ?>">About</a>
            <a href="<?= site_url('customers') ?>">Customers</a>
            <a href="<?= site_url('users') ?>">Users</a>
        </nav>

        <main class="home-content">
            <img
                class="home-gif"
                src="<?= base_url('images/hi.gif') ?>"
                alt="A cute character waving hello">

            <p>This is the landing page of the POS System.</p>
            <p>This project demonstrates routing, controllers, views, and PHP arrays using CodeIgniter 4.</p>
        </main>

    </div>

    <footer>
        © 2026 Chi | Chiriemie Keith G. Rimando | TC37
    </footer>

</body>

</html>