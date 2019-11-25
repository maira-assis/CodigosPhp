<?php
$con = new mysqli("localhost","root","","exemplo");
if($con->connect_error) {
die("Erro na conexão: " . $con->connect_errno . " - " . $con->connect_error);
}
?>