<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8"/>
<link rel="stylesheet" href ="estilo.css"/>
<title>Decremento depois - 28/10</title>
<style>
</style>
</head>
<body>

<div class =h2>
<?php
$atual= $_GET["a"];
echo "O ano atual é $atual <br>";
$atual=$atual-1;
echo "O ano com decremento é $atual <br>";

?>
</div>
</body>
</html>