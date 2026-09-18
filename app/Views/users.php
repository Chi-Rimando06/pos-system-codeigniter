<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Accounts - POS System</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body>

    <div class="container">

        <header>
            <h1>User Accounts</h1>

            <nav>
                <a href="<?= site_url('/') ?>">Home</a>
                <a href="<?= site_url('about') ?>">About</a>
                <a href="<?= site_url('customers') ?>">Customers</a>
                <a href="<?= site_url('users') ?>">Users</a>
            </nav>
        </header>

        <div class="card">

            <h2>User List</h2>

            <table>
                <tr>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Role</th>
                </tr>

                <?php $users = $users ?? []; ?>

                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $user['username'] ?? ''; ?></td>
                        <td><?= $user['fullname'] ?? ''; ?></td>
                        <td><?= $user['role'] ?? ''; ?></td>
                    </tr>
                <?php endforeach; ?>

            </table>

        </div>

        <footer>
            © 2026 Chi | Chiriemie Keith G. Rimando | TC37
        </footer>

    </div>

</body>

</html>