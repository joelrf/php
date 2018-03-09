<?php
session_start();
include('../config.php');
$email = $POST ['email'];
$password = md5($_POST['password']);

$result = mysqli_query($mysqli, "SELECT * FROM usuario where email= '$email' and password='$password'");

$count=mysqli_num_rows($result);

if($count >= 1){
    $_SESSION['canAccess'] = true;
    header('Location: dashboard.php');
    exit;
}else {
    $_SESSION['canAccess'] = false;

echo"ERROR";
    
}


mysqli_close($mysqli);

?>

