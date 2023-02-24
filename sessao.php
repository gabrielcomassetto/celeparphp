<?php
include('conexao.php');
session_start();
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
} 

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT nivel, usuario, senha FROM adm WHERE usuario = '{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if($row == 1){

    $row = mysqli_fetch_array($result);
    $_SESSION['usuario'] = $row['usuario'];
    $_SESSION['nivel'] = $row['nivel'];

    if($_SESSION['nivel'] == 1){
    header('Location: addArtigos.php');
    exit();
    }
} else {
    header('Location: index.php');
    exit();

}