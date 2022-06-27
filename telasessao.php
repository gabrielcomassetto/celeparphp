<?php
include ('verificarlogin.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sessao.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Area do usuario
    </title>
</head>

<body>
<?php require_once "header.php"; ?>

<div class="sessao">
<h5 class="nome-sessao">Bem vindo, <?php echo $_SESSION['nome'];?><br> Nivel de acesso <?php echo $_SESSION['nivel'];?> ADM</h5>
<h6 class="mudarsenha"><a href="mudasenha.php">Mudar senha</a></h6>
<h6 class="botao-sair"><a href="logout.php">Sair</a></h6>
</div>

<section class="painel">
    <div class="card text-center">
        <div class="card-header">Painel de controle</div>
        <div class="card-body">
            <h5 class="card-title">Contra cheque</h5>
            <p class="card-text">Consultar seus contra cheques</p>
            <a href="#" class="btn btn-primary">Acessar</a>
        </div>
    </div>
        <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">Busca de usuario</h5>
            <p class="card-text">Procurar usuario cadastrado pelo cpf</p>
            <a href="buscacpf.php" class="btn btn-primary">Acessar</a>
        </div>  
    </div>
        <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">blank</h5>
            <p class="card-text">blank</p>
            <a href="#" class="btn btn-primary">Acessar</a>
        </div>  
    </div>
</section>

<?php require_once "footer.php" ?>
</body>
</html>


