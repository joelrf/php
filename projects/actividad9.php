<!DOCTYPE html>  
<html>
<head>
<title>Actividad 9</title> 
</head> 
<body> 
<form action="/actividad9.php" method="get">
<div>
        <label for="name">Name:</label>
        <input type="text" name="numero" />
        <button type="submit">Enviar</button>
    </div>
</form>

<?php
if (!empty($_GET["numero"])) {
    echo "Numero: ".$_GET["numero"];
}
$numero=$_GET["numero"];
echo "table border=\"1\">";
for($i = 1; $i <= 10; $i++){
    $resultado = $numero * $i;
    echo "<tr>";
    echo "<td>$numero</td>"; 
    echo "<td> x </td>" ;
    echo "<td> $i </td>" ;
    echo "<td> = </td>" ;
    echo "<td> $resultado </td>" ;
    echo "</tr>";
    
}
?>

</body> 
</html> 
