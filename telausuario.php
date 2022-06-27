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
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php require_once "header.php"?>
    <div class="sessao">
    <h5 class="nome-sessao">Bem vindo, <?php echo $_SESSION['nome'];?><br> Nivel de acesso <?php echo $_SESSION['nivel'];?></h5>
    <h6 class="botao-sair"><a href="logout.php">Sair</a></h6>
</div>

<div class="painel-usuario">
    <div class="row row-cols-1 row-cols-md-2 g-3 justify-content-center" style="width: 100%;">
             <div class="card text-center" style="width: 14rem; height:11rem; margin: 10px;">
                <div class="card-body">
                <h5 class="card-title">Mudar senha</h5>
                <p class="card-text"><i class='fas fa-lock' style='font-size:48px; color: grey'></i></p>
                <a href="mudasenha.php" class="btn btn-primary">Acessar</a>
                </div>
            </div>

            <div class="card text-center" style="width: 15rem; height:11rem; margin: 10px">
                <div class="card-body">
                <h5 class="card-title">Contra cheque</h5>
                <p class="card-text"><i class='fas fa-file-alt' style='font-size:48px;color:grey'></i></p>
                <a href="#" class="btn btn-primary">Acessar</a>
                </div>
            </div>

            <div class="card text-center" style="width: 15rem; height:11rem; margin: 10px">
                <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
</div>

    
    <?php require_once "footer.php"?>
</body>
</html>