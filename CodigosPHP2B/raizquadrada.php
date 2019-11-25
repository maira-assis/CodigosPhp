<! DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" href ="estilo.css"/>
<title>Raiz</title>
<style>
</style>
</head>
<body>
<div class=h2>
<?php
$valor= $_GET["v"];
$rq = sqrt($valor);
echo " A raiz de $valor é igual a $rq";
?>
</div>
</body>
</html>