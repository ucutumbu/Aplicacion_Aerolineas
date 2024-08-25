<?php
include '../includes/conexion.php';

// Consulta SQL con el nombre correcto de la tabla
$sql = "SELECT H.nombre, COUNT(R.id_reserva) AS num_reservas
        FROM HOTEL H
        JOIN reservas R ON H.id_hotel = R.id_hotel
        GROUP BY H.nombre
        HAVING COUNT(R.id_reserva) > 2";

// Ejecutar la consulta
$result = $conn->query($sql);

// Verificar si la consulta fue exitosa
if ($result === false) {
    // Mostrar el error de la consulta
    echo "Error en la consulta: " . $conn->error;
} else {
    // Verificar si se encontraron filas
    if ($result->num_rows > 0) {
        // Mostrar los resultados
        while($row = $result->fetch_assoc()) {
            echo "Hotel: " . $row["nombre"]. " - Número de Reservas: " . $row["num_reservas"]. "<br>";
        }
    } else {
        echo "No se encontraron hoteles con más de dos reservas.";
    }
}

// Cerrar la conexión
$conn->close();
?>
