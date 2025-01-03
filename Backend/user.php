<?php
include 'db.php';
include 'function.php';

$users = getAllUsers();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registered Users</title>
</head>
<body>
    <h1>Registered Users</h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user['person']; ?></td>
            <td><?php echo $user['gender']; ?></td>
            <td><?php echo $user['mail']; ?></td>
            <td><?php echo $user['number']; ?></td>
            <td><?php echo $user['address']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>