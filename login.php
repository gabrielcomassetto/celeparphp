<?php
include("conexao.php");
require_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R2 Consultoria | Login adm</title>
</head>
<body>
<div class=container style="margin-top: 50px; width: 500px;">
<div class="inputs-container">
    <form class="inputs" action="sessao.php" method="post" name="form">
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Login</label>
            <div class="col-sm-10">
                <input type="usuario" name="usuario" class="form-control" id="inputEmail3">
            </div>
    </div>


    <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Senha:</label>
            <div class="col-sm-10">
                <input type="password" name="senha" class="form-control" id="inputPassword3">
            </div>
    </div>
    <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>
</div>
</body>
</html>

