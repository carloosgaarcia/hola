<?php
include('conexion.php');

$nombre   = $_POST['nombre'];
$email    = $_POST['email'];
$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : NULL;
$carrera  = $_POST['carrera'];

// Prepared statement seguro
$stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, telefono, carrera) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nombre, $email, $telefono, $carrera);

if ($stmt->execute()) {
    echo "OK";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>