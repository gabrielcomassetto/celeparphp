<?php
include ('verificarlogin.php');
include ('conexao.php');

if(isset($_SESSION['nome'])){

$usuarioatual = $_SESSION['nome'];
$velhasenha = mysqli_real_escape_string($conexao, $_POST['velhasenha']);
$novasenha = mysqli_real_escape_string($conexao, $_POST['novasenha']);
$novasenhac = mysqli_real_escape_string($conexao, $_POST['novasenhac']);


$query = mysqli_query($conexao, "SELECT senha FROM persons WHERE nome = '{$usuarioatual}'");
$row = mysqli_fetch_array($query);
$atual = $row['senha'];

if(($velhasenha === $atual) && ($novasenha === $novasenhac)){
    $muda = "UPDATE persons SET senha = '{$novasenha}' WHERE nome = '$_SESSION[nome]' ";
    $change = mysqli_query($conexao, $muda);
    unset($_SESSION['nome']);
    header('Location: index.php');
    exit();

} else{
    echo "Senhas nao coincidem";
}

}

?>

