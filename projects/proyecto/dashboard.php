<?php
session_start();
if ($_SESSION['canAccess']= false){
    header('location: login.php');
    exit;}
    echo"WELCOME TO DASHBOARD";

?>