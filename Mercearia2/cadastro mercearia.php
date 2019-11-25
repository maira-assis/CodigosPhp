<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8">
<head>
<title>Loja</title>
</head>
<style>
body{
background-color:#9BC79F;
}
h1{
font-family:arial;
color:white;
text-align:center;
text-shadow:2px 2px black;
}
p{
font-family:times new roman;
font-size:27px;
text-align:center;
text-shadow:1px 1px white;
color:black;
}
</style>
<body>
<?php
//abrir conexão
if(isset($_POST['submit'])){
$con=mysqli_connect('localhost','root','','mercearia2') or die("Erro ao conectar ao banco")
$nome=$_POST['nome'];
$descricao=$_POST['descricao'];
$marca=$_POST['marca'];
$quantidade_estoque=$_POST['quantidade_estoque'];
$data_Validade=$_POST['data_Validade'];
$fornecedor=$_POST['fornecedor'];
$valor_compra=$_POST['valor_compra'];
$valor_venda=$_POST['valor_venda'];

$query="insert into produto values(DEFAULT, '$nome','$descricao', '$marca', '$quantidade_estoque', '$data_Validade', '$fornecedor', '$valor_compra', '$valor_venda')";
$data=mysqli_query($con, $query) or die ("Erro ao conectar a tabela");
echo "<h2>Cadastro Realizado com Sucesso!</h2>";
mysqli_close($con);
}else
if(isset($POST['pesquisar'))}
$con=mysqli_connect('localhost','root','','mercearia2') or die("Erro ao conectar ao banco");
$cod_produto=$_POST['cod_produto'];
$query="Select * from produto where nome like '%".$cod_produto."%'";
$data=mysqli_query($con,$query);
echo "<table border='1'>";
echo "<tr><th>Código</th><th>Produto</th><th>Quantidade</th><th>Preço</th></tr>";
foreach($data as $d)
echo "<tr><td>".$d['cod_produto']."</td><td>".$d['nome']."</td><td>".$d['quantidade_estoque']."</td><td>".$d['valor_venda']."</td></tr>";
echo"</table>";
mysqli_close($con);
}
?>
<h1>Cadastro de Produto</h1>
<form method="post" action=" <?php echo $_SERVERR['PHP_SELF']; ?>">

<label>Nome do Produto:</label>
<input type="text" name="nome" id="nome" placeholder="Informe o nome do produto" size="50"><br><br>

<label>Descrição do Produto:</label>
<input type="text" name="descricao" id="descricao" placeholder="Informe a descrição do produto" size="50"><br><br>

<label>Quantidade: </label>
<input type="numeric" name="quantidade_estoque" id="quantidade_estoque" placeholder="Informe a quantidade" size="11"><br><br>

<label>Preço</label>
<input type="text" name="valor_venda" id="valor_venda" placeholder="Informe o Preço " size="11"><br><br>

<input type="submit" value="Gravar" name="submit">
<input type="reset" value="Apagar">
</form>
<h1>Pesquisar por Produto</h1>
<form method="post" action="<?php echo $_SERVER['PH-SELF']; ?>">
<label>Nome:</label>
<input type="text" name="cod_produto" id="cod_produto" id="cod_produto" placeholder="Informe o nome do produto" size="50"><br><br>
<input type="submit" value="Pesquisar" name="pesquisar">
<input type="reset" value="Apagar">
</form>
</body>
</html>