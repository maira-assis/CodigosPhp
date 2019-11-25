<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Mercearia M&M </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css1.css">
  <link rel="shortcut icon" href= "imagens/Logo.png"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
           <li><a href="Parte da tabela.php">Produtos</a></li>
          </ul>
        </li>
        <li><a href="formulario.php">Fale Conosco</a></li>
        
      </ul>
      
    </div>
  </div>
</nav>
  
<div class="container-fluid" >

<div class="formulario">
<h2>Fale Conosco</h2>
<form action="#" method="post" name="contato" >
<table width="309" height="297" cellpadding="0" align="left">
<tr>
<b><td>Nome</td></b>
<td><input type="text" id="nome_pessoa" name="nome_pessoa"/> </td>
</tr>

<tr>
<b><td>Telefone</td></b>
<td><input type="text" id="telefone" name="telefone" /></td>
</tr> 

<tr>
<b><td>E-mail</td></b>
<td><input type="text" id="email" name="email" /></td>
</tr>

<tr>
<b><td>Mensagem</td></b>
<td><textarea type="text" name="mensagem" id="mensagem" cols="20" rows="4"></textarea></td>
</tr>

<tr>
<td></td>
<td><input id="form" type="submit" name="submit" value="Enviar" />
<input id="form" type="reset" value="Limpar" /></td>
</tr>


</table>
</form>
</div>

 <div class="mapa">
	<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.
  7585457166056!2d-43.98542688494457!3d-19.934577243599893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa69655616c4e05%
  3A0xc1a64c284e0ee870!2sR.+Goneri%2C+376+-+Gameleira%2C+Belo+Horizonte+-+MG%2C+30510-040!5e0!3m2!1spt-BR!2sbr!4v1561491656827!5m2!1spt-BR!2sbr" 
  width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></center>
  </div>
  <?php
//abrir conesao

if(isset($_POST['submit'])){
$con=mysqli_connect('localhost','root','','mercearia')or die("erro ao conectar ao banco");
$nome_pessoa=$_POST['nome_pessoa'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$mensagem=$_POST['mensagem'];
$query="insert into pessoas values(DEFAULT,'$nome_pessoa','$telefone','$email','$mensagem')";
$data=mysqli_query($con,$query) or die ("erro ao conectar a tabela");
echo "<h2>Enviado com sucesso.</h2>";
mysqli_close($con);
}?>

</div>



<footer>
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
  </footer>
</body>
</html>
