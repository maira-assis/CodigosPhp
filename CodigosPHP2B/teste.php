<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8"/>
<link rel="stylesheet" href ="estilo.css"/>
<title>Primeiro exemplo PHP</title>
<style>
</style>
</head>

<body>

<div class =h2>
<?php
$n1 =$_GET["a"];
$n2=$_GET["b"];

$s=$n1+$n2;
$nome= "Gustavo";
$idade = 36;
$m = ($n1+$n2)/2;
echo " $nome tem  $idade  anos !";
echo "<hr/>";
echo "<br/>";
echo "<h2>Valores recebidos: $n1 e $n2</h2>";
echo "<br/>";
echo "<br/> A soma entre $n1 e $n2 é igual a $s .";
echo "<br/>";
echo "<br/> A subtração vale ".($n1-$n2);
echo "<br/>";
echo "<br/>A divisão vale ".($n1/$n2);
echo "<br/>";



echo "<br/>O módulo vale ".($n1%$n2);
echo "<br/>";
echo "</br>A média vale $m";

?>
</div>
</body>
</html>