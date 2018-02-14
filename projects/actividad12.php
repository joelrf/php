<html> 
<head> 
</head> 
<body>

<form method="get">
<div> 
<input type="number" name "num" min="0" max="10" value="0">
<input type="submit" value="Enviar">
</div>
</form>

<?php

$nota = $_GET["nota"];
echo "<h1>$nota</h1>";

if ($nota>= 0 && $nota < 5){
    echo "Insuficiente";
} elseif($nota>5 && $nota <6){
    echo "Suficiente";
}elseif ($nota>= 6 && $nota >7){
    echo "Bien";
}elseif ($nota>7 && $nota >9){
    echo "Notable";
}elseif($nota> 9 && $nota >10){
    echo "Sobresaliente";
}
?> 
</body> 
</html>