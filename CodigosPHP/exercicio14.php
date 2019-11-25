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
<p>A variável recebe um incremento de 02 em 02 até ser menor que ou igual a 80</p>
</center>

<?php
$X=2;

while($X<=80)
{
echo $X,"<br>";
$X++;


$X=$X+1;

if($X>80)
{
break;
}
}
?>
</body>
</html>