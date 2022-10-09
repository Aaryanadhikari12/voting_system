<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "voting";

$con = mysqli_connect($server, $user, $pass, $db);
if(!$con){
    echo "Connection to the database is not successful due to ". mysqli_connect_error();
}


?>