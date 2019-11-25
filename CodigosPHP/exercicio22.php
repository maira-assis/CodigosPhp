<html>
<head>
<meta charset="utf-8">
</head>
<body>
<center>
<p>Números primos no intervalo de 1 a 200</p>
</center>
<?php
for($i = 1; $i <= 200; $i++)
{
    $divisores = 0;
     
    for($j = $i; $j >= 1; $j--)
    {
    if (($i % $j) == 0) {
            $divisores++;
        }
    }
     
    if ($divisores == 2)
    {
        echo $i;
		echo"<br>";
    }
}
?>
</body> 
</html>