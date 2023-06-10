<?php
header('Content-Type: text/html; charset=utf-8');

$servername="127.0.0.1:3307";
$username="root";
$password="";
$basename="newsweek";

$dbc = mysqli_connect($servername, $username, $password, $basename) or die('Error connecting to MYSQL server.'.mysqli_connect_error());
mysqli_set_charset($dbc, "utf8");
if($dbc){
    echo "Connected successfully";
}
?>