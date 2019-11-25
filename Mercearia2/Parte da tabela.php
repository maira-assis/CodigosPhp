<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Mercearia M&M </title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css4.css">
 
  <link rel="shortcut icon" href= "imagens/Logo.png"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.html">Início</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
			
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sobre <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="criacao.html">Criação</a></li>
           <li><a href="Parte da tabela.html">Produtos</a></li>
          </ul>
        </li>
        <li><a href="formulario.php">Fale Conosco</a></li>
   
      </ul>
      
    </div>
  </div>
</nav>
  
<div class="container-fluid" >
<div class="div1">
<h2>Escolha quais produtos deseja.</h2>
<br>

<div>
<p><a id="botoes" href="limpeza.html" target="_blank">Limpeza e Higiene</a></p>
</div>
<br>
<div>
<p><a id="botoes" href="Alimenticios.html" target="_blank">Alimenticios</a></p>
</div>
<br>
</div>
<div class="div2">
<h2 id="parceiros">Fornecedores</h2>
<div class="clearfix">
<div class="img-container">
<img id="imagens" src="Imagens/parceria3.png" style="width:100%">
</div>

<div class="img-container">
<img id="imagens" src="Imagens/parceria4.png" style="width:100%">
</div>

<div class="img-container">
<img id="imagens" src="Imagens/parceria5.png" style="width:100%">
</div>
</div>

<div class="clearfix">
<div class="img-container">
<img id="imagens" src="Imagens/parceria7.png" style="width:100%">
</div>

<div class="img-container">
<img id="imagens" src="Imagens/parceria6.png" style="width:100%">
</div>

<div class="img-container">
<img id="imagens" src="Imagens/parceria1.gif" style="width:100%">
</div>
</div>

</div>
<br>

<br><br>
<br><br><br><br> <br><br> <br><br><br><br><br>

<h2>Pesquisar</h2>
<br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
 
<p>Nome: <input type="text" name="nome" id="nome" placeholder="Informe nome do produto" size="50"/></p> <br><br>
<input id="botoes2" type="submit" value="Pesquisar" name="pesquisa"/>
<input id="botoes2" type="reset" value="Apagar"/>
<!--</div>-->
</form>
<br>
<?php
if(isset($_POST['pesquisa'])){
$con=mysqli_connect('localhost','root','','mercearia') or die("erro conectar ao banco de dados");
mysqli_set_charset($con, "utf8");
$nome=$_POST['nome'];
$desc;
$query="select * from produto where nome like'%".$nome."%'";
$data=mysqli_query($con, $query);
$linhas=mysqli_num_rows($data);

if(!$linhas)
	Echo "<h3>Nenhum registro encontrado!</h3>";
else{
echo "<table border='1'>";
echo "<tr><th>Código</th></th><th>Nome</th><th>Quantidade</th><th>Preço</th></tr>";
foreach($data as $d){
echo "<tr><td>".$d['cod_produto']."</td><td>".$d['nome']."</td><td>".$d['quantidade_estoque']."</td><td>".$d['valor_venda']."</td></tr>";
$desc=$d['nome'];
}
echo "</table>";
}
mysqli_close($con);
}
?>




</div>

<br><br> 



  <div id="footer1">
    <br>  
  <center>
 <h3>@ Todos os direitos reservados a Mercearia M&M @ </h3>
   </center>
  <center>
  <p id="desenvolvedores">Desenvolvido por: João Vitor Moreira, Manuele Helena, Pâmela Fernanda e Thaylan Ottoni.</p>
  </center>
<br>
<br>
  </div>
 
  
  
  
  
  
  
</body>
</html>
