<?php
session_start();
$_SESSION['canAccess']= false;
header('location: index.php');
exit;
    ?>