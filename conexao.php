<?php

$hostname = "localhost";
$user = "root";
$password = "";
$database = "testedb";
$conexao = mysqli_connect($hostname, $user, $password, $database);

if (!$conexao) {
    echo "falha";
} 