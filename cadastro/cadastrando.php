<html>
<head>
<title>Cadastrando...</title>
</head>
<body>

<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());

?>

<?php

$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$sql = mysql_query("INSERT INTO usuarios(nome, email, senha)
VALUES('$nome','$email','$senha')");
echo "<center><h1>Cadastro efetuado com sucesso!";

?>

</body>
</html>