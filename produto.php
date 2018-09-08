<?php
$host="localhost";
$user="id7031371_cabralnatalia";
$pass="wpensar";
$banco="id7031371_supermercado";


$conexao=  mysqli_connect($host, $user, $pass) or die (mysql_error());
mysqli_select_db($conexao, $banco) or die (mysql_error()); 


$nomeprod=$_POST["nomeprod"];



$sql=mysqli_query($conexao,"INSERT INTO produto(nomeprod) values('$nomeprod')");
mysqli_close($conexao);

?>

<script> 
	alert("Dados gravados com sucesso");
</script>