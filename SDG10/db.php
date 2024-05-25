<?php
$host = "localhost";
$user = "root";
$pass ="";
$database = "sdg10";

$connect = mysqli_connect($host, $user, $pass, $database);

if (!$connect){
  die("Connection Failed!".mysqli_connect_error());
}

?>
