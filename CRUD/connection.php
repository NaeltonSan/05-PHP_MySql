<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "php_mysql_iniciando";

$conexao = new mysqli($servidor, $usuario, $senha, $database);

return $conexao;
?>