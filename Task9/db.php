<?php

$serverName     = 'localhost';
$user   = 'root';
$pass       = '';
$db     = 'test';

$conn = mysqli_connect($serverName, $user, $pass, $db);

if($conn) {
     echo "You are connected <br>";
} else {
    "Something wrong";
}


?>