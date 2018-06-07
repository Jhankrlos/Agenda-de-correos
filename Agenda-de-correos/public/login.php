<?php 
require '../src/class/dataSource.php';
require '../src/class/config.php';
use connectdatabase\dataSource;

$db = new dataSource($host, $user, $pass, $database, $port);
$sql = 'SELECT id, username, password FROM user';
$db->query($sql);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
       
        <meta charset="UTF-8">
        <title>Log in</title>
        <link href="css/loginstyle.css" rel="stylesheet">
         <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Hello, welcome to Mailagenda.com</h1>
            <h3 class="text-center login-title">Sign in:</h3>
            <div class="account-wall">
                <img class="profile-img" src="img/user.png">
                <form class="form-signin" action="../src/class/validate.php" method="post">
                <input type="text" class="form-control" placeholder="Username" required autofocus>
                <input type="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>   
            </div>
            
        </div>
    </div>
</div>
    </body>
</html>
