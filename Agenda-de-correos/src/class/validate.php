<?php

require 'dataSource.php';
require 'config.php';

use connectdatabase\dataSource;

/* @var $_POST type */
$username = $_POST['username'];
$password = $_POST['password'];

$connection = new dataSource($host, $user, $pass, $database, $port);
$sql = "SELECT username, password FROM user WHERE username = '$username' AND password = '$password'";
$connection->query($sql);
$result = $connection->getData();
$file = (is_array($result) === true) ? count($result) : 0;

if ($file > 0) {
  header("location:bienvenido.html");
} else {
  echo 'Error en la autentificacion';
}








