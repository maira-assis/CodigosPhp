<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
     <title>  </title>
</head>

<body>
<?php
require_once('conexao.php');
$id="";
$descricao="";
$preco="";
$quantidade="";
if (isset ($_POST ['submit'])){
$id=$_POST['id'];
$descricao=$_POST['descricao'];
$preco=$_POST['preco'];
$quantidade=$_POST['quantidade'];

$query="UPDATE produto SET descricao='$descricao',quantidade='$quantidade', preco='$preco' where id=".$id;
$data=mysqli_query($dbc, $query);
if($data)
	echo "Atualização feita com sucesso!";
else
	echo "Erro ao atualizar!";


}else{
	
	echo $id;
	
	

$id=$_GET['id'];
$query="SELECT * FROM produto WHERE id=".$id;
$data=mysqli_query($dbc,$query)or die ("Erro ao recuperar dados!");
foreach($data as $data){
	$descricao=$data['descricao'];
	$quantidade=$data['quantidade'];
	$preco=$data['preco'];
}
}
?>
<h1> Cadastro de Produto </h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
<fieldset> <legend> Produto </legend>

<label> id: </label> <input type="text" size="100%" name="id" id="id" value="<?php echo $id;?>"> <br>

<label> Descrição: </label> <input type="text" size="100%" name="descricao" id="descricao" value="<?php echo $descricao;?>"> <br>
<label> Quantidade: </label> <input type="number" size="5%" name="quantidade" id="quantidade" value="<?php echo $quantidade;?>"> <br>
<label> Preco: </label> <input type="text" size="5%" name="preco" id="preco" value="<?php echo $preco;?>"> <br>
<input type="submit" name="submit" value="alterar"> <input type="reset" name="reset" value="Apagar">
</fieldset>

</form>
</body>
</html>