<html>
<head>
  <meta charset="utf-8">
  <title>Supermercado WPENSAR</title>
  <meta name="viewport" content="width-device-width, initial-scale=1">
  <link href="css/bootstrap.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" type="text/css" href="css/sp.css">
  <script>
  $(document).ready(function() {
   $(window).on("scroll", function() {
    if ($(window).scrollTop() >= 20) {
     $(".navbar").addClass("compressed");
   } else {
     $(".navbar").removeClass("compressed");
   }
 });
 });
  </script>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">      
      <div class="navbar-header">        
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#exampleNavComponents" >                    
          <span class="sr-only">Navegação Responsiva</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="index2.html" class="navbar-brand">
         <div class="imglogo">
         </div>
       </a>
     </div>
     <div class="collapse navbar-collapse" id="exampleNavComponents">
      <ul class="nav navbar-nav navbar-right">
       <li><a href="produto.html">PRODUTO</a></li>
       <li><a href="compra.html">COMPRA</a></li>
     </ul>
   </div>
 </div> 
</nav>
<div class="container-fluid caixa">
  <div class="col-md-12">
  <div class="col-md-6 pula">
   <form method="POST" action="lista.php">
   <div class="col-xs-12">
    <h1 class="card-title">Listagem de Compras</h1>
    </div>     
  </form>
</div>
<div class="col-md-6 img">
  <img src="http://noceducacao.com/wp-content/uploads/2015/03/logo-wpensar-noc-educacao.png" class="img-responsive">
</div>
</div>
</div>
</body>
</html>
<?php
$host="localhost";
$user="id7031371_cabralnatalia";
$pass="wpensar";
$banco="id7031371_supermercado";


$conexao=  mysqli_connect($host, $user, $pass) or die (mysql_error());
mysqli_select_db($conexao, $banco) or die (mysql_error()); 
     $result= mysqli_query($conexao,"Select nomeprod,valortotal,qtd,precomedio from compra ORDER BY codcompra" );
     while($row= mysqli_fetch_array($result))
     { echo '<div class="col-xs-12">
        <p class="card-text text-muted alig ="left">
        <br>Nome do Produto: '.$row['nomeprod'].'
        <br>Valor Total: '.$row['valortotal'].'
        <br>Quantidade: '.$row['valortotal'].'
        <br>Preço Medio: '.$row['precomedio'].'
        </p>
      </div>';
     }
     mysqli_close($conexao);
?>