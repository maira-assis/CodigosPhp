
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<style>
h1{
font-size:16px;}
</style>
</head>
<body>

<center>
<p>"A variável X receberá o incremento de 1 em 1 até que o valor seja menor ou igual a 250. <br>";</p>
</center>
<?php
$x=50;
$divisao;

echo $x, "<br>";
while($x<=250)
{
$x++;
$divisao=$x/10;

echo $x,"<br>";

if($x>=250)
{
break;
}

}



echo "O valor da divisão é: ", $divisao;
?>
</body>
</html>