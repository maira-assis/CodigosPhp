<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8"/>
<link rel="stylesheet" href ="estilo.css"/>
<title>Operadores ternarios 06/11</title>
<style>
</style>
</head>
<body>
<div class =h2>
<?php
$n1= $_GET["a"];
$n2= $_GET["b"];
$tipo = $_GET["op"];
echo "Os valores passados foram $n1 e $n2 <br>";
$r = ($tipo == "s")? $n1+$n2 : $n1*$n2;
echo "O resultado será $r";
?>
</div>
</body>
</html>