<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8"/>
<link rel="stylesheet" href ="estilo.css"/>
<title>calculo_acrescimo - 30/10</title>
<style>
</style>
</head>
<body>

<div class =h2>
<?php
$preco = $_GET["preco"];
echo "Preço = $preco <br><br>";
$preco +=($preco*10)/100;

echo "O novo preço com acréscimo é $preco";
?>
</div>
</body>
</html>