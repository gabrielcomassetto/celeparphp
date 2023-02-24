<?php 
include_once ("conexao.php");

$titulo = $_POST["titulo"];
$texto = $_POST["texto"];

$sql = "INSERT INTO r2artigos(titulo, texto) VALUES ('$titulo', '$texto')";

if (mysqli_query($conexao, $sql)) {
    header('Location: artigos.php');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
  }
  

mysqli_close($conexao);

?>