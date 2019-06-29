<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conexao = require('connection.php');
    $email = $_POST['email'] ?? null;
    $stmt = $conexao->prepare('INSERT INTO users (email) VALUES (?)');
    $stmt->bind_param('s', $email); //  s de string
    $stmt->execute();

    header('location: /PHP_SON/05-PHP_MySQL/CRUD');
    die(); // gatantir que daqui pra baixo nada vai ser execultado
}
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
    <h1>Adicionar usuário</h1>

    <form action="/PHP_SON/05-PHP_MySQL/CRUD/adicionar.php" method="post">
        <input type="text" name="email">
        <input type="submit" value="enviar">
    </form>

    <p><a href="/PHP_SON/05-PHP_MySQL/CRUD">voltar</a></p>
</body>
</html>