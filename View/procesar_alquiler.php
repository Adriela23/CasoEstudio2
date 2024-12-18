<?php
// Configurar conexión a la base de datos
$servername = "localhost";
$username = "root"; // Cambia si es necesario
$password = "hola123"; // Cambia si es necesario
$dbname = "Formularios"; // El nombre correcto de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recoger datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Preparar la consulta SQL
$sql = "INSERT INTO consultas_alquiler (nombre, correo_electronico, casa, mensaje)
        VALUES ('', '$email', '', '$password')"; // Ajusta los valores si es necesario

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "<p>Consulta enviada correctamente. ¡Gracias por tu interés!</p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>

