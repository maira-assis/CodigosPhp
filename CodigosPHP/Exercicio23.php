<html>
<head>
<meta charset="utf-8">
<title>Exercício vinte e tres</title>
</head>



<body>
<center><p>Escolha de mês e o aviso de quantos dias o mês tem.</p>
<?php


$mes = 3;

switch ($mes)
{
	case "1": echo "<p><center>Mês escolhido: ";
	echo "<br>";
	echo "Janeiro - Têm 31 dias.</p>></center>";
	break;
	
	case "2": echo "<p><center>Mês escolhido: ";
	echo "<br>";
	echo "Fevereiro - Têm 28 dias.</p></center>";
	break;
	
	case "3": echo "<p><center>Mês escolhido: ";
	echo "<br>";
	echo "Março - Têm 31 dias.</h2></center>";
	break;
	
	case "4": echo "<p><center>Mês escolhido: ";
	echo "<br>";
	echo "Abril - Têm 30 dias.</h2></center>";
	break;
	
	case "5": echo "<p><center>Mês escolhido: ";
	echo "<br>";
	echo "Maio - Têm 31 dias.</h2></center>";
	break;
	
	case "6": echo "<p><center>Mês escolhido: ";
	echo "<br>";
	echo "Junho - Têm 30 dias.</h2></center>";
	break;
	
	case "7": echo "<p><center>Mês escolhido: ";
	echo "<br>";
	echo "Julho - Têm 31 dias.</h2></center>";
	break;
	
	case "8": echo "<p><center>Mês escolhido: ";
	echo "<br>";
	echo "Agosto - Têm 31 dias.</h2></center>";
	break;
	
	case "9": echo "<p><center>Mês escolhido: ";
	echo "<br>";
	echo "Setembro - Têm 30 dias.</h2></center>";
	break;
	
	case "10": echo "<p><center>Mês escolhido: ";
	echo "<br>";
	echo "Outubro - Têm 31 dias.</h2></center>";
	break;
	
	case "11": echo "<p><center>Mês escolhido: ";
	echo "<br>";
	echo "Novembro - Têm 30 dias.</h2></center>";
	break;
	
	case "12": echo "<p><center>Mês escolhido: ";
	echo "<br>";
	echo "Dezembro - Têm 31 dias.</h2></center>";
	break;
	
	default: echo "<p>><center>OPÇÃO INVALÍDA</p></center>";
	break;
}


?>
</body>
</html>