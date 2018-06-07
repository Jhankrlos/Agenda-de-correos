<?php
require 'dataSource.php';
require 'config.php';
use connectdatabase\dataSource;

/* @var $_POST type */
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT username, password FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query(getConection(), $sql);

$file = mysqli_num_rows($result);
if ($file>0) {
    header("location:bienvenido.html");
} else {
    echo 'error en la autentificacion';
}

mysqli_free_result($result);
mysqli_close($getConection);






    

