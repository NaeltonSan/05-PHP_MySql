<?php

// ini_set('mysqli.allow_persistent','On');     //usado quando o tempo de conexões no banco de dados estoura!
// ini_set('mysql.max_persistent', -1);
// ini_set('mysql.max_links', -1);


$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "php_mysql_iniciando";

$conexao = new mysqli($servidor, $usuario, $senha, $database);

// if ($conexao) {
//     echo $conexao->host_info;
// }

echo "<br>";

$sql = 'CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL
)';

// if (!$conexao->query($sql)){
//     echo "Tabela Users já existe.";
// }

echo "<br>";

// $result = $conexao->query('INSERT INTO users (email) VALUE ("naelton@teste.com")');
echo '<pre>';


$result = $conexao->query('SELECT * FROM users');  // selecionar todos os campos apartir da tabela users

// var_dump('antes',$result->fetch_assoc());
// echo "<ul>";
//     while ($user = $result->fetch_assoc()) {  // a variavel $user vai receber os valores que vinher do banco.
//         echo "<li>". $user['id'] . "-" . $user['email']. "</li>";
//     }
// echo "</ul>";
// // print_r($result);

// var_dump('depois',$result->fetch_assoc());

$users = $result->fetch_all(MYSQLI_ASSOC); // traz o nome dos campos, neste caso ID e email, ao inves de nuemros  0,1,2...
foreach ($users as $user) {
    echo $user['id'] . ' - ' . $user['email'] . '</br>';
}
echo '<pre>';
var_dump($users);