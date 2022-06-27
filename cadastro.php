<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<form class="row g-3" action="insere.php" method="post" action="insere.php">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Nome completo</label>
            <input type="name" class="form-control" id="inputEmail4" name="nome">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">cpf</label>
            <input type="cpf" class="form-control" id="inputEmail4" name="cpf">
        </div>

        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Senha</label>
            <input type="password" class="form-control" id="inputPassword4" name="senha">
        </div>

        <div class="col-12">
            <label for="inputAddress2" class="form-label">E-mail</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="usuario@dominio.com" name="email">
        </div>

        <div class="col-md-6">
            <label for="inputCity" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="inputCity" name="cidade">
        </div>

        <div class="col-md-4">
            <label for="inputState" class="form-label">Estado</label>
            <select id="inputState" class="form-select" name="selection">
                        <option selected>PR</option>
                        <option value="AC">AC</option>
						<option value="AL">AL</option>
						<option value="AM">AM</option>
						<option value="AP">AP</option>
						<option value="BA">BA</option>
						<option value="CE">CE</option>
						<option value="DF">DF</option>
						<option value="ES">ES</option>
						<option value="GO">GO</option>
						<option value="MA">MA</option>
						<option value="MG">MG</option>
						<option value="MS">MS</option>
						<option value="MT">MT</option>
						<option value="PA">PA</option>
						<option value="PB">PB</option>
						<option value="PE">PE</option>
						<option value="PI">PI</option>
						<option value="PR" selected="selected">PR</option>
						<option value="RJ">RJ</option>
						<option value="RN">RN</option>
						<option value="RS">RS</option>
						<option value="RO">RO</option>
						<option value="RR">RR</option>
						<option value="SC">SC</option>
						<option value="SE">SE</option>
						<option value="SP">SP</option>
						<option value="TO">TO</option>
            </select>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
</form>
    
</body>
</html>