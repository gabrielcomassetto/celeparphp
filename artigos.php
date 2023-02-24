<?php 
include("conexao.php");

$query = "SELECT * FROM r2artigos order by id desc";

$consulta = mysqli_query($conexao, $query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R2 Consultoria | Publicações</title>
</head>
<body>
<?php require_once "header.php" ?>
<div class="container" style="margin: 20px auto 20px auto;">


<?php while($row = mysqli_fetch_array($consulta)){
  $titulo = $row[1];
  $texto = $row[2];



  echo "<div class='card text-center' style='width: 100%; margin: 20px;box-shadow: 2px 2px #EEE;min-width: 450px;'>";
  echo "<div class='card-body'>";
  echo "<h5 class='card-title'>$titulo </h5>";
  echo   "<p class='card-text' style='white-space: nowrap; overflow: hidden; text-overflow: ellipsis;'>$texto</p>";
  echo  "<a href='' class='btn btn-dark' style='background-color:#353D48;'>Ler mais</a>";
  echo "</div>";
  echo "</div>";

}
  ?>
</div>


</body>
</html>