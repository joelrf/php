<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>

    <title>ejercicio5</title>
</head>
<body>
	<form method="get">
      <div> 
      <h2>Introduce el numero de elementos</h2>
     
        <input type="number" name="num" min="1" max="100" value="1"> 
        <input type="submit" name="lanzar">
    </div>

</form>
   



<?php


$numero_elementos=$_GET["num"];
echo"<h1>$numero_elementos</h1>";

$temperaturas = array();

$i=0;
while ($i < $numero_elementos){
    $temperaturas[$i]=rand(1,30);
    $i++;
}


$suma=0;
$i=0;
while ($i < $numero_elementos){
    $suma=$suma + $temperaturas[$i];
    $i++;
}
$media=$suma/$numero_elementos;

echo "<pre>";
print_r($temperaturas);
echo "<pre>";


$maximo=$temperaturas[];
$i=0;
while ($i<$numero_elementos){
if($temperaturas[$i]>$maximo){
    $maxim=$temperaturas[$i];
}
$i++;
}
echo "<h3>MAXIMO: $maximo</h3>"


$minimo=$temperaturas[0];
$i=0;
while($i<$numero_elementos){
if($temperatura[$op]<$minimo){
    $minimo=$temperaturas[$i];
}
$i++;
}
echo "<h3>MINIMO: $minimo</h3>";


?>
</body>
</html>