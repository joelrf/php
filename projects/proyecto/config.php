<?php
define("DB_HOST","localhost");
define("DB_NAME","tienda");
define("DB_USER","wp_user");
define("DB_PASSWORD","wp_password");



$mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
?>