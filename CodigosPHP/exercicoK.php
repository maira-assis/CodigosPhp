<html>
<head>
<meta charset="utf-8">
</head>
<body>
<center>
<p>  Maior XYZ - 02/10/2019 </p>
</center>
<?php
$x=30;
$y=20;
$z=10;

if($x>$y)
{
	echo"X é maior que Y";
	echo"<br>";
}

if($x>$z)
{
	echo"X é maior que Z";
	echo"<br>";
}

if($x>$y && $x>$z)
{
	echo"X é maior que Y e Z";
}

?>
</body> 
</html>