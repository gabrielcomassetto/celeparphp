<?php include('verificarlogin.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once "header.php";
    ?>

<form action="inserir.php" method="POST">
<div class="container">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Titulo</label>
  <input type="titulo" class="form-control" id="titulo" placeholder="Titulo" name="titulo">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Texto:</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="texto"></textarea>
</div>

<button type="submit" class="btn btn-dark position-relative top-50 start-50" style="background-color:#353D48;" >Enviar</button>
</div>
</form>
</body>
</html>