<?php

$server= "localhost";
$user= "root";
$pass= "";
$database= "finanzas";

$conn = new mysqli($server, $user, $pass, $database);

if (!$conn) {
    die("Fallo al conectar a MySQL: " . mysqli_connect_error());
}

$setnames = $conn->prepare("SET NAMES 'utf8'");
$setnames->execute();

var_dump($conn);