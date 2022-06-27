<?php
include_once("conexao.php");
include ('verificarlogin.php');

$filtro = isset($_GET['filtro']) ? $_GET['filtro'] : "";

$query = "SELECT * FROM persons WHERE cpf like '%$filtro%' order by nome";

$consulta = mysqli_query($conexao, $query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tabela.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>


<body>
<?php require_once "header.php"; ?>
    <form action="" method="get">
        <div id="consulta"> 
            <input class="buscar" name="filtro" placeholder="Busca por cpf">
            <span class="buscar"></span>
            <button class="botaocpf" id="busca">Buscar</button>
        </div>
    </form>

<section id="tabela-consulta">
    
<?php
echo "<table class='table table-striped'>";
    echo"<tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Email</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th></th></tr>";

    while($row = mysqli_fetch_array($consulta)){
        $id = $row[0];
        $nome = $row[1];
        $cpf = $row[2];
        $email = $row[3];
        $cidade = $row[5];
        $estado = $row[6];

        echo"<tr>
        <td>$id</td>
        <td>$nome</td>
        <td>$cpf</td>
        <td>$email </td>
        <td>$cidade</td>
        <td>$estado</td>
        <td><a href='editarusuario.php'><i class='fa fa-edit' href='editarusuario.php'></i></a></td></tr>";
        
}
echo "</table>";
?>
</section>

<a href="telasessao.php"> Painel </a>
<?php require_once "footer.php" ?>
</body>
</html>

