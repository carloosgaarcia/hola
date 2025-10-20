<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "usuarios_validados"; // Asegúrate de que tu base se llame así

$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}
?>