<!DOCTYPE html>  
<html>
<head>
<title>Actividad 7</title> 
</head> 
<body> 
<form action="/actividad7.php" method="get">
<div>
        <label for="name">Name:</label>
        <input type="text" name="nombre" />
        <button type="submit">Enviar</button>
    </div>
</form>

<?php
if (!empty($_GET["nombre"])) {
    echo "Nombre: ".$_GET["nombre"];
}

?>

</body> 
</html> 
