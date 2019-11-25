<?php

$coxinha = 3.00;
$pudim = 1.50;
$bisnaga = 2.00;
$leite = 3.20;

$n1= $_POST["coxinha"]; //recebe do formulario html o campo de name=coxinha
$n1= $n1*$coxinha;
$n2 = $_POST["pudim"]; //recebe do formulario html o campo de name=pudim
$n2 = $n2*$pudim;
$n3 = $_POST["bisnaga"];
$n3 = $n3*$bisnaga;
$n4 = $_POST["leite"];
$n4 = $n4*$leite;

$valor_total = $n1+$n2+$n3+$n4;

echo ("O valor total é: ".$valor_total."<br>");
echo ("Pg a vista 10%: ".$valor_total*0.9);
echo("<br>");
$parcela = ($valor_total*1.05)/3;
echo ("Valor da parcela em 3x: ".$parcela."<br>");
echo ("Valor total parcelado: ".$parcela*3);

?>