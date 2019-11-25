<?php
$con = new mysgli("localhost","root","", "exemplo");
if(!$con) {
die("Erro na conexão: " .mysqli_connect_error()); 
}

echo "Conectado com Sucesso <br>";

// incluir alguns registros na tabela Usuario
$sql = "INSERT INTO produtos (produtos_codigos,produtos-descriacao,"
prodito_unidade,produto_saldoatual )VALUES ('P004','borracha','UN','30')";
if (mysgli_query($con, $sql)) {
	echo "inserido com sucesso";
} else{
	echo "Erro: ".$sql."<br>".mysqli_error($con);
} 
mysqli_close($con);
?>