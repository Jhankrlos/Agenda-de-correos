<?php
try {
    $conn = mysqli_connect( 'Localhost', 'root', '', 'users', 3306);
    $sql = "SELECT id, username, password
            FROM user";
    $data = mysqli_query($conn, $sql);
} catch (Exception $exc) {
    echo $exc->getMessage();
}

