<?php
include '../includes/conexion.php';  //script de conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $origen = $_POST['origen'];
    $destino = $_POST['destino'];
    $fecha = $_POST['fecha'];
    $plazas = $_POST['plazas'];
    $precio = $_POST['precio'];

    $sql = "INSERT INTO VUELO (origen, destino, fecha, plazas_disponibles, precio)
    VALUES ('$origen', '$destino', '$fecha', '$plazas', '$precio')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo vuelo agregado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
