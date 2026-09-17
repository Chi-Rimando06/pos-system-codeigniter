<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Accounts</title>
</head>
<body>

    <h1>User Accounts</h1>

    <nav>
        <a href="<?= site_url('/') ?>">Home</a>
        <a href="<?= site_url('about') ?>">About</a>
        <a href="<?= site_url('customers') ?>">Customers</a>
        <a href="<?= site_url('users') ?>">Users</a>
    </nav>

    <table border="1">
        <tr>
            <th>Username</th>
            <th>Full Name</th>
            <th>Role</th>
        </tr>

        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['username']; ?></td>
            <td><?= $user['fullname']; ?></td>
            <td><?= $user['role']; ?></td>
        </tr>
        <?php endforeach; ?>

    </table>

</body>
</html>