<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8"/>
<link rel="stylesheet" href ="estilo.css"/>
<title>Exercício 3 - formatação</title>
<style>
</style>
</head>
<body>
<div class =h2>
<?php
$v1= $_GET["x"];
$v2= $_GET["y"];
echo "Formatação com vírgula";
				echo "<br/>";
				echo "</br>O valor de $v1 em moeda é R$" .number_format($v1,2,",",".");
				echo "<hr/>";
?>
</div>
</body>
</html