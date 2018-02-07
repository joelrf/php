<html> 
<head> 
<title> Ejercicio de las monedas</title> 
</head> 
<body> 
<h1> <?php echo $title; ?></h1> 
<?php 
$moneda =rand (0, 1);
if ($moneda == 0) 
{
    echo "<h2>Cara</h2>";
    echo "<img src=\"images/cara.gif\">";
} else

{
    echo "<h2>Cruz</h2>";
    echo "<img src=\"images/cruz.jpeg\">";
}
?>
</body> 
</html> 

