<?php
include_once("config.php");

$codigo = $_GET['codigo'];
echo "<h1>$codigo</h1>";
exit;

$query = "SELECT *FROM producto";
$result = mysqli_query ($mysqli, $query);
?>