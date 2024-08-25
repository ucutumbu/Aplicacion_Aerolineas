<?php
// Configuración de la base de datos
$servername = "localhost"; // o la dirección IP del servidor MySQL
$username = "root"; // por ejemplo, 'root'
$password = "Rob022001."; // la contraseña de tu usuario MySQL
$dbname = "agencia"; // el nombre de la base de datos que has creado en MySQL Workbench

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";
?>