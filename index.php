<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal do servidor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <script src="validaform.js"></script>
    
</head>


<body>  
    <?php require_once "header.php" ?>

    <a href="cadastro.php">Inserir dados</a>


    <div class="container">
        <div class="card">
            <div class="card-body">Esse é um serviço exclusivo para o funcionalismo público do Estado do Paraná.     
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body">Bem vindo!</br>
                O acesso ao Portal do Servidor mudou, agora é possível acessar nossos serviços, como contracheque, comprovante
                de rendimentos, perícia médica e extrato de contribuição previdenciária com o cadastro do PIÁ.
                Caso você ainda não tenha sua identidade digital, o acesso pode ser feito com o usuário e senha que você possui. 
            </div>
        </div>
    </div>

<div class="inputs-container">
    <form class="inputs" action="login2.php" method="post" name="form">
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail:</label>
            <div class="col-sm-10">
                <input type="usuario" name="email" class="form-control" id="inputEmail3">
            </div>
    </div>


    <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Senha:</label>
            <div class="col-sm-10">
                <input type="password" name="senha" class="form-control" id="inputPassword3">
            </div>
    </div>
    <button type="submit" class="btn btn-primary" onclick="valida()">Entrar</button>
    </form>
</div>

<?php require_once "footer.php" ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>