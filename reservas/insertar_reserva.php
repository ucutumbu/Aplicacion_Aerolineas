<?php
include '../includes/conexion.php';  // Incluye el script de conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_cliente = $_POST['id_cliente'];
    $fecha_reserva = $_POST['fecha_reserva'];
    $id_vuelo = $_POST['id_vuelo'];
    $id_hotel = $_POST['id_hotel'];

    // Preparar la consulta para evitar inyecciones SQL
    $stmt = $conn->prepare("INSERT INTO reservas (id_cliente, fecha_reserva, id_vuelo, id_hotel) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("issi", $id_cliente, $fecha_reserva, $id_vuelo, $id_hotel);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Reserva agregada correctamente";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();
}
?>
