<?php
$serverName = "localhost";
$userName = "Adsinto";
$password = "4nT¡c0n$7it¿ciOnkL";
$dataBaseName = "login";

$conn = new mysqli($serverName, $userName, $password, $dataBaseName);
$conn->set_charset("utf8");

if($conn -> error){
    die("No ha conexion". $conn -> connect_error);
}
