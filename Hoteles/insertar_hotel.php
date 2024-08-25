<?php
include '../includes/conexion.php';  //script de conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $ubicacion = $_POST['ubicacion'];
    $habitaciones = $_POST['habitaciones'];
    $tarifa = $_POST['tarifa'];

    $sql = "INSERT INTO HOTEL (nombre, ubicación, habitaciones_disponibles, tarifa_noche)
    VALUES ('$nombre', '$ubicacion', '$habitaciones', '$tarifa')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo hotel agregado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
