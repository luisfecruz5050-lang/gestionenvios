<?php
$host = "mysql-luis.alwaysdata.net";
$user = "luis";
$pass = "clase1234";
$db = "luis_gestion_envios";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>