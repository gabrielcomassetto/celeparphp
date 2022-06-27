<?php
include ('verificarlogin.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mudar senha</title>
  <script src="mudasenha.js"></script>
  <link rel ="stylesheet" href="sessao.css">
  <link rel="stylesheet" href="mudarsenha.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
<?php require_once "header.php" ?>

<div class="sessao">
      <h5 class="nome-sessao">Bem vindo, <?php echo $_SESSION['nome'];?><br> Nivel de acesso <?php echo $_SESSION['nivel'];?></h5>
        <?php 
        if($_SESSION['nivel'] == 5)
        { 
        echo "<h6 class='portal'><a href='telasessao.php'>Portal</a></h6>";
        }
        else 
        {
        echo "<h6 class='portal'><a href='telausuario.php'>Portal</a></h6>";
        }
        ?>
      <h6 class="botao-sair"><a href="logout.php">Sair</a></h6>
</div>


<form class="container-senha" method="post" name="mudarsenha" action="mudarsenhalogica.php">

            <div class="form-floating">
              <input type="password" name="velhasenha" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Senha atual</label>
            </div>

            <div class="form-floating">
              <input type="password" name="novasenha" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Nova senha</label>
            </div>

            <div class="form-floating">
              <input type="password" name="novasenhac" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Confirme a nova senha</label>
            </div>

            <div class="botao">
              <button class="btn btn-primary" onclick="valida()" name="change" type="submit">Enviar</button>
            </div>

</form>

<?php require_once "footer.php" ?>


    
</body>
</html>