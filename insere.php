<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cidade = $_POST['cidade'];
$estado = $_POST['selection'];

$sql = "insert into persons(nome,cpf,email,senha,cidade,estado) values ('$nome','$cpf','$email','$senha','$cidade','$estado')";
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);
?>
