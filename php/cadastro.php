<?php
$host="186.202.152.191";
$user="jwfestas";
$pass="jwadmin";
$banco="jwfestas";
$conexao=mysqli_connect($host,$user,$pass)or die(mysqli_error());
mysqli_select_db($conexao,$banco)or die(mysqli_error());
?>


<?php
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$e_mail=$_POST['e_mail'];
$dt_nasc=$_POST['dt_nasc'];
$comentarios=$_POST['comentarios'];

$sql=mysqli_query($conexao,"INSERT INTO cliente(nome,cpf,e_mail,dt_nasc,comentarios) values(['$nome'],['$cpf'],['$e_mail'],['$dt_nasc'],['$comentarios'])");
mysqli_close($conexao);
echo "cadastro realizado com sucesso";
?>
