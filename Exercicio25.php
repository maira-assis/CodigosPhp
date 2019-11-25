<html>
<head>
<meta charset="utf-8">
<title>Exercício vinte e cinco</title>
</head>

<style>
h1{font-family: arial;
	font-size:18px;}
</style>

<body>
<h1>Exercício 23) Faça um código em PHP que mostre um título centralizado explicando o que o código realiza e a data. Faça uma condição que valide um número para o mês do ano, sendo 1 para janeiro e assim por diante até o 12 para dezembro. Escolher um número de 1 a 12 e mostrar o nome do mês correspondente e quantos dias ele tem. Ou seja, 28, 30 ou 31 (neste caso não vamos validar o ano bissexto).
<hr>
<?php
echo "<h1><center>Tabuada de Divisão.</h1></center>";
echo "<br>";
echo "18/09/2019";
echo "<br>";
echo "<hr>";

$mult1 = 1; $mult2 = 2; $mult3 = 3; $mult4 = 4; $mult5 = 5; 
$mult6 = 6; $mult7 = 7; $mult8 = 8; $mult9 = 9; $mult10 = 10;
$opcao = 1;

switch($opcao)
{
case "1": echo "TABUADA DE 1"; echo "<br>";
echo "1 x 1 = ".$mult1 / 1; echo "<br>";
echo "1 x 2 = ".$mult1 / 2; echo "<br>";
echo "1 x 3 = ".$mult1 / 3; echo "<br>";
echo "1 x 4 = ".$mult1 / 4; echo "<br>";
echo "1 x 5 = ".$mult1 / 5; echo "<br>";
echo "1 x 6 = ".$mult1 / 6; echo "<br>";
echo "1 x 7 = ".$mult1 / 7; echo "<br>";
echo "1 x 8 = ".$mult1 / 8; echo "<br>";
echo "1 x 9 = ".$mult1 / 9; echo "<br>";
echo "1 x 10 = ".$mult1 / 10; echo "<br>";
echo "<hr>";
break;

case "2": echo "TABUADA DE 2"; echo "<br>";
echo "2 x 0 = ".$mult2 / 0; echo "<br>";
echo "2 x 1 = ".$mult2 / 1; echo "<br>";
echo "2 x 2 = ".$mult2 / 2; echo "<br>";
echo "2 x 3 = ".$mult2 / 3; echo "<br>";
echo "2 x 4 = ".$mult2 / 4; echo "<br>";
echo "2 x 5 = ".$mult2 / 5; echo "<br>";
echo "2 x 6 = ".$mult2 / 6; echo "<br>";
echo "2 x 7 = ".$mult2 / 7; echo "<br>";
echo "2 x 8 = ".$mult2 / 8; echo "<br>";
echo "2 x 9 = ".$mult2 / 9; echo "<br>";
echo "2 x 10 = ".$mult2 / 10; echo "<br>";
echo "<hr>";
break;

case "3": echo "TABUADA DE 3"; echo "<br>";
echo "3 x 0 = ".$mult3 / 0; echo "<br>";
echo "3 x 1 = ".$mult3 / 1; echo "<br>";
echo "3 x 2 = ".$mult3 / 2; echo "<br>";
echo "3 x 3 = ".$mult3 / 3; echo "<br>";
echo "3 x 4 = ".$mult3 / 4; echo "<br>";
echo "3 x 5 = ".$mult3 / 5; echo "<br>";
echo "3 x 6 = ".$mult3 / 6; echo "<br>";
echo "3 x 7 = ".$mult3 / 7; echo "<br>";
echo "3 x 8 = ".$mult3 / 8; echo "<br>";
echo "3 x 9 = ".$mult3 / 9; echo "<br>";
echo "3 x 10 = ".$mult3 / 10; echo "<br>";
echo "<hr>";
break;

case "4": echo "TABUADA DE 4"; echo "<br>";
echo "4 x 0 = ".$mult4 / 0; echo "<br>";
echo "4 x 1 = ".$mult4 / 1; echo "<br>";
echo "4 x 2 = ".$mult4 / 2; echo "<br>";
echo "4 x 3 = ".$mult4 / 3; echo "<br>";
echo "4 x 4 = ".$mult4 / 4; echo "<br>";
echo "4 x 5 = ".$mult4 / 5; echo "<br>";
echo "4 x 6 = ".$mult4 / 6; echo "<br>";
echo "4 x 7 = ".$mult4 / 7; echo "<br>";
echo "4 x 8 = ".$mult4 / 8; echo "<br>";
echo "4 x 9 = ".$mult4 / 9; echo "<br>";
echo "4 x 10 = ".$mult4 / 10; echo "<br>";
echo "<hr>";
break;

case "5": echo "TABUADA DE 5"; echo "<br>";
echo "5 x 0 = ".$mult5 / 0; echo "<br>";
echo "5 x 1 = ".$mult5 / 1; echo "<br>";
echo "5 x 2 = ".$mult5 / 2; echo "<br>";
echo "5 x 3 = ".$mult5 / 3; echo "<br>";
echo "5 x 4 = ".$mult5 / 4; echo "<br>";
echo "5 x 5 = ".$mult5 / 5; echo "<br>";
echo "5 x 6 = ".$mult5 / 6; echo "<br>";
echo "5 x 7 = ".$mult5 / 7; echo "<br>";
echo "5 x 8 = ".$mult5 / 8; echo "<br>";
echo "5 x 9 = ".$mult5 / 9; echo "<br>";
echo "5 x 10 = ".$mult5 / 10; echo "<br>";
echo "<hr>";
break;

case "6": echo "TABUADA DE 6"; echo "<br>";
echo "6 x 0 = ".$mult6 / 0; echo "<br>";
echo "6 x 1 = ".$mult6 / 1; echo "<br>";
echo "6 x 2 = ".$mult6 / 2; echo "<br>";
echo "6 x 3 = ".$mult6 / 3; echo "<br>";
echo "6 x 4 = ".$mult6 / 4; echo "<br>";
echo "6 x 5 = ".$mult6 / 5; echo "<br>";
echo "6 x 6 = ".$mult6 / 6; echo "<br>";
echo "6 x 7 = ".$mult6 / 7; echo "<br>";
echo "6 x 8 = ".$mult6 / 8; echo "<br>";
echo "6 x 9 = ".$mult6 / 9; echo "<br>";
echo "6 x 10 = ".$mult6 / 10; echo "<br>";
echo "<hr>";
break;

case "7": echo "TABUADA DE 7"; echo "<br>";
echo "7 x 0 = ".$mult7 / 0; echo "<br>";
echo "7 x 1 = ".$mult7 / 1; echo "<br>";
echo "7 x 2 = ".$mult7 / 2; echo "<br>";
echo "7 x 3 = ".$mult7 / 3; echo "<br>";
echo "7 x 4 = ".$mult7 / 4; echo "<br>";
echo "7 x 5 = ".$mult7 / 5; echo "<br>";
echo "7 x 6 = ".$mult7 / 6; echo "<br>";
echo "7 x 7 = ".$mult7 / 7; echo "<br>";
echo "7 x 8 = ".$mult7 / 8; echo "<br>";
echo "7 x 9 = ".$mult7 / 9; echo "<br>";
echo "7 x 10 = ".$mult7 / 10; echo "<br>";
echo "<hr>";
break;

case "8": echo "TABUADA DE 8"; echo "<br>";
echo "8 x 0 = ".$mult8 / 0; echo "<br>";
echo "8 x 1 = ".$mult8 / 1; echo "<br>";
echo "8 x 2 = ".$mult8 / 2; echo "<br>";
echo "8 x 3 = ".$mult8 / 3; echo "<br>";
echo "8 x 4 = ".$mult8 / 4; echo "<br>";
echo "8 x 5 = ".$mult8 / 5; echo "<br>";
echo "8 x 6 = ".$mult8 / 6; echo "<br>";
echo "8 x 7 = ".$mult8 / 7; echo "<br>";
echo "8 x 8 = ".$mult8 / 8; echo "<br>";
echo "8 x 9 = ".$mult8 / 9; echo "<br>";
echo "8 x 10 = ".$mult8 / 10; echo "<br>";
echo "<hr>";
break;

case "9": echo "TABUADA DE 9"; echo "<br>";
echo "9 x 0 = ".$mult9 / 0; echo "<br>";
echo "9 x 1 = ".$mult9 / 1; echo "<br>";
echo "9 x 2 = ".$mult9 / 2; echo "<br>";
echo "9 x 3 = ".$mult9 / 3; echo "<br>";
echo "9 x 4 = ".$mult9 / 4; echo "<br>";
echo "9 x 5 = ".$mult9 / 5; echo "<br>";
echo "9 x 6 = ".$mult9 / 6; echo "<br>";
echo "9 x 7 = ".$mult9 / 7; echo "<br>";
echo "9 x 8 = ".$mult9 / 8; echo "<br>";
echo "9 x 9 = ".$mult9 / 9; echo "<br>";
echo "9 x 10 = ".$mult9 / 10; echo "<br>";
echo "<hr>";
break;

case "10": echo "TABUADA DE 10"; echo "<br>";
echo "10 x 0 = ".$mult10 / 0; echo "<br>";
echo "10 x 1 = ".$mult10 / 1; echo "<br>";
echo "10 x 2 = ".$mult10 / 2; echo "<br>";
echo "10 x 3 = ".$mult10 / 3; echo "<br>";
echo "10 x 4 = ".$mult10 / 4; echo "<br>";
echo "10 x 5 = ".$mult10 / 5; echo "<br>";
echo "10 x 6 = ".$mult10 / 6; echo "<br>";
echo "10 x 7 = ".$mult10 / 7; echo "<br>";
echo "10 x 8 = ".$mult10 / 8; echo "<br>";
echo "10 x 9 = ".$mult10 / 9; echo "<br>";
echo "10 x 10 = ".$mult10 / 10; echo "<br>";
break;

default: echo "OPÇÃO INVÁLIDA";
break;
}
?>
</body>
</html>