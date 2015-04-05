<!DOCTYPE html>
<html>
<?php require_once("../tags/cabecalho.php");?>
<head>
  <?php require_once("../tags/headers.php");?>
</head>
<body>
<?php include_once "../menu.php";?>

<?php

$nome = $_REQUEST['nome'];

$email = $_REQUEST['email'];

$assunto = $_REQUEST['assunto'];

$mensagem = $_REQUEST['mensagem'];

echo "<h4>Dados enviados com sucesso, abaixo seguem os dados que você enviou:</h4><br>";

echo $nome ."<br>". $email . "<br>" . $assunto ."<br>". $mensagem;
?>


</body>
</html>