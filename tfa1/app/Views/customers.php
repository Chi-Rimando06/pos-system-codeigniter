<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Customer Accounts</title>
</head>
<body>

    <h1>Customer Accounts</h1>

    <nav>
        <a href="<?= site_url('/') ?>">Home</a>
        <a href="<?= site_url('about') ?>">About</a>
        <a href="<?= site_url('customers') ?>">Customers</a>
        <a href="<?= site_url('users') ?>">Users</a>
    </nav>

    <table border="1">
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>

        <?php foreach ($customers as $customer): ?>
        <tr>
            <td><?= $customer['fullname']; ?></td>
            <td><?= $customer['email']; ?></td>
            <td><?= $customer['phone']; ?></td>
        </tr>
        <?php endforeach; ?>

    </table>

</body>
</html>