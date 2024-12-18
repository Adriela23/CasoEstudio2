<?php
// Configuración de la conexión a la base de datos
$servername = "localhost"; 
$username = "root";        
$password = "hola123";            
$dbname = "Formularios";   

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recoger los datos del formulario
$nombre = $_POST['name'];
$correo_electronico = $_POST['email'];
$consulta = $_POST['consulta'];
$mensaje = $_POST['message'];

// Preparar la consulta SQL para insertar los datos
$sql = "INSERT INTO formulario_consultas_casa (nombre, correo_electronico, consulta, mensaje) 
        VALUES ('$nombre', '$correo_electronico', '$consulta', '$mensaje')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    // Si la consulta es exitosa, redirigir al usuario con un mensaje de éxito
    echo "<p>Gracias por su consulta. Recibirá una respuesta pronto.</p>";
} else {
    // Si ocurre un error, mostrarlo
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
