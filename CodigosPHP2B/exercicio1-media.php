<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8"/>
<link rel="stylesheet" href ="estilo.css"/>
<title>Exercício 1 -média 06/11</title>
<style>
</style>
</head>
<body>
<div class =h2>
<?php
$n1= $_GET["a"];
$n2= $_GET["b"];
echo "O valor da nota 1 : $n1 <br>";
echo "O valor da nota 2 : $n2 <br><br>";
$m= ($n1+$n2)/2;
echo "A média é : $m <br><br>";
$s=($m>=6 ) ? "APROVADO" : "REPROVADO <br>";
echo "Situação : $s";
?>
</div>
</body>
</html>