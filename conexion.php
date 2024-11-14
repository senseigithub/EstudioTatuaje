<?php

$server = "localhost";
$user = "root";
$pass = "root";
$db = "pruebaphp";

$conexion = new mysqli($server, $user, $pass, $db);

if ($conexion->connect_error) {
    die("La conexion fallo: " . $conexion->connect_error);
} else {
    echo "Conectado a la base de datos";
}

// Escape user inputs for security
$nombre = $conexion->real_escape_string($_POST['nombre']);
$email = $conexion->real_escape_string($_POST['email']);
$telefono = $conexion->real_escape_string($_POST['telefono']);
$nacimiento = $conexion->real_escape_string($_POST['nacimiento']);
$sexo = $conexion->real_escape_string($_POST['sexo']);
$mensaje = $conexion->real_escape_string($_POST['mensaje']);

// Insert user data into database
$sql = "INSERT INTO contactos (Nombre, Email, Telefono, Nacimiento, Sexo, Mensaje) 
        VALUES ('$nombre', '$email', '$telefono', '$nacimiento', '$sexo', '$mensaje')";

if ($conexion->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar datos: " . $conexion->error;
}

// Close connection
$conexion->close();
?>