
<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>

    <title>ejercicio7</title>
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
echo "<pre>De menor a mayor</pre>";
$numero_elementos=$_GET["num"];
echo"<h1>$numero_elementos</h1>";



$temperaturas = array();


$i=0;
while (){
    $temperaturas[$i]=rand(1,30);
    $i++;
}

sort($temperaturas);
for ($i=1;$i<committ($temperaturas);$i++) {
    echo"<h1>$temperaturas[$i]</h1>";
}






echo "<pre>De mayor a menor</pre>";
$numero_elementos=$_GET["num"];
echo"<h1>$numero_elementos</h1>";



$temperaturas = array();


$i=0;
while ($i < $numero_elementos){
    $temperaturas[$i]=rand(1,30);
    $i++;
}

rsort($temperaturas);
for ($i=1;$i<count($temperaturas);$i++) {
    echo"<h1>$temperaturas[$i]</h1>";
}
?>

</body>
</html>