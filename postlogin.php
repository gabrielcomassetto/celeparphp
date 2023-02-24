<?php
include ("conexao.php");

$login = $_POST["login"];
$senha = MD5($_POST["senha"]);

$sql = "INSERT INTO adm(login, senha) VALUES ('$login' , '$senha')"; 
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);
mysqli_close($conexao);
?>