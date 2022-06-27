<?php
session_start();
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
} 

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT email, senha, nivel, nome FROM persons WHERE email = '{$email}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if($row == 1){

    $row = mysqli_fetch_array($result);
    $_SESSION['nome'] = $row['nome'];
    $_SESSION['nivel'] = $row['nivel'];

    if($_SESSION['nivel'] == 5){
    header('Location: telasessao.php');
    exit();
    }

    if($_SESSION['nivel'] == 1){
        header('Location: telausuario.php');
        exit();
    }

} else {
    header('Location: index.php');
    exit();

}