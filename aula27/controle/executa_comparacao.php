<?php

$n1= $_POST["n1"]; //recebendo via post a variavel n1 do "name" no formulario


if ($n1<5){
	echo ("Numero menor q 5, o numero é: ".$n1);
}
else if ($n1>5){
	echo ("Numero maior q 5, o numero é: ".$n1);
}
else{
	echo ("Numero igual a 5, o numero é: ".$n1);
}

?>