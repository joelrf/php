<!DOCTYPE html>  
<html>
<head>
<title>Actividad 8</title> 
</head> 
<body> 
<form action="/actividad8.php" method="post">
<div>
        <label for="name">Name:</label>
        <input type="text" name="nombre" />
        <button type="submit">Enviar</button>
    </div>
</form>

<?php
if (!empty($_POST["nombre"])) {
    echo "Nombre: ".$_POST["nombre"];
}

?>

</body> 
</html> 
