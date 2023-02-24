<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R2 Consultoria | Contato</title>
</head>
<body>
<?php require_once 'header.php' ?>
    
</style>


<div class="container-form">  
  <form id="contact" action="" method="post">
    <h3>Contato</h3>
    <fieldset>
      <input placeholder="Nome:" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
     <input placeholder="Email:" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Telefone:" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Mensagem" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Enviar</button>
    </fieldset>
  </form>
</div>
</body>
</html>