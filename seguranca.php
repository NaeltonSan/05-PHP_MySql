<?php

    $email = $_GET['email'] ?? null; // se nao preencher o email retorna erro null;

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "php_mysql_iniciando";
    $conexao = new mysqli($servidor, $usuario, $senha, $database);

    // $result = $conexao->query('INSERT INTO users (email) VALUES ("'. $email.'")');

    $stmt = $conexao->prepare('SELECT * FROM users where id > ? and id < ?'); // coloca ?
    /**
     * i = integer
     * s = string
     * b = blob
     * d = double
     */
    $stmt->bind_param('ii', $id, $id2);
    $stmt->execute();
    $result = $stmt->get_result();
    $users = $result->fetch_all(MYSQLI_ASSOC);
    foreach ($users as $user) {
        echo $user['id'] . ' - ' . $user['email'] . '</br>';
    }

    echo "<pre>";
    var_dump($users);
?>