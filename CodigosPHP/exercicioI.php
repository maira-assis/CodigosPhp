<html>
<head>
<meta charset="utf-8">
</head>
<body>
<center>
<p>Números no intervalo 10 e 100 e se são pares ou ímpares - 25/09/2019 </p>
</center>
<?php
$a=1;
echo $a;
echo"<br>";
if($a>=10 && $a<=100)
{
	echo"Está no intervalo";
}
else
{
	echo"Não está no intervalo";
	echo"<br>";
}
	
	if($a % 2 == 0){
     echo "Par";
} else {
     echo "Ímpar";
}
?>
</body> 
</html>