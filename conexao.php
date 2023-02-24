<?php

$hostname = "localhost";
$user = "root";
$passaword = "";
$database = "test";
$conexao = mysqli_connect($hostname, $user, $passaword, $database);

if (!$conexao){
    echo "Falha na conexao";
}
?>