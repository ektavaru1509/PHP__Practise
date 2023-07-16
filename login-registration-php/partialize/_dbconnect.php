<?php

$servername = "localhost";
$username = "root";
$password = "";
$databse = "users";

$conn = mysqli_connect($servername, $username, $password, $databse);
if(!$conn){
    die("Error" . mysqli_connect_error());
}




?>