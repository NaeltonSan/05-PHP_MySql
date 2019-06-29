<?php

    $email = $_GET['email'] ?? null; // se nao preencher o email retorna erro null;

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "php_mysql_iniciando";
    $conexao = new mysqli($servidor, $usuario, $senha, $database);

    // $result = $conexao->query('INSERT INTO users (email) VALUES ("'. $email.'")');

    $result = $conexao->query('SELECT * FROM users WHERE id > 5');
    $users = $result->fetch_all(MYSQLI_ASSOC); // traz o nome dos campos, neste caso ID e email, ao inves de nuemros  0,1,2...
    foreach ($users as $user) {
        echo $user['id'] . ' - ' . $user['email'] . '</br>';
    }

?>