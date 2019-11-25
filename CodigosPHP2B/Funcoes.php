<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8"/>
<link rel="stylesheet" href ="estilo.css"/>
<title>Funções Atritméticas - 28/10</title>
<style>
</style>
</head>
<body>

<div class =h2>
<?php
$v1= $_GET["x"];
$v2= $_GET["y"];
echo "<h2>Valores recebidos: $v1 e $v2 </h2>";
echo "</br>";
echo "O valor absoluto de $v2 é " .abs($v2);
echo "</br>";
echo "<hr/>";

	echo "Potenciação";
	echo "<br/>";
	echo "<br/>";
	echo "O valor de $v1<sup>$v2</sup> é " .pow($v1, $v2);
	echo "<hr/>";
	
		echo "Raiz";
		echo "<br/>";
		echo "<br/>A raiz de $v1 é " .sqrt($v1);
		echo "<br/>";
		echo "<hr/>";
		
			echo "Arredondamento";
			echo "<br/>";
			
			echo "<br/>O valor de $v2 arredondado é " .ceil($v2);
			echo "<hr/>";
			
				echo "Arredondamento para baixo";
				echo "<br/>";
				echo "<br/>O valor de $v2 arredondado é " .floor($v2);
				echo "<hr/>";
				echo "Parte inteira";
				echo "<br/>";
				echo "<br/>A parte inteira de $v2 é " .intval($v2);
				echo "<hr/>";
				echo "Formatação";
				echo "<br/>";
				echo "</br>O valor de $v1 em moeda é R$" .number_format($v1,2);
				echo "<hr/>";
				echo "Formatação com vírgula";
				echo "<br/>";
				echo "</br>O valor de $v1 em moeda é R$" .number_format($v1,2,",",".");
				echo "<hr/>";
				
				
?>
</div>
</body>
</html>