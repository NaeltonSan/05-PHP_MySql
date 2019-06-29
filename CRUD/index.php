<?php
    $conexao = require 'connection.php';

    $result = $conexao->query('SELECT *FROM users');
    $users = $result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>
                    <th>#</th>
                    <th>EMAIL</th>
                    <th></th>
                </td>
            </tr>
            <tbody>
                <?php foreach ($users as $user):?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td>
                        <a href="ver.php?id=<?php echo $user['id']; ?>">Ver</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </thead>
    </table>
</body>
</html>