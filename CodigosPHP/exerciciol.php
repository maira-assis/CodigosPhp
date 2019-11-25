
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<center>
<p>Maior que 50, incremento/decremento - 02/10/2019 </p>
</center>
<?php

$num1 = 40;
$num2 = 14;
$cont1 = $num1;
$cont2 = $num2;

while ($num1 <= 50) {
   
        $cont1++;
        $cont2--;

        echo("O valor 1 é igual " . $num1 . " - Valor 1 com incremento " . $cont1 . "</br>");
        echo("O valor 2 é igual " . $num2 . " - Valor 2 com decremento " . $cont2 . "</br> </br> ");
    


        if($cont1 >= 50){
            break;
        }
}


?>
</body>
</html>