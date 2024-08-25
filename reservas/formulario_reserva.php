<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Reserva</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="../js/validaciones.js"></script>
</head>
<body>
    <h2>Agregar Reserva</h2>
    <form name="formulario_reserva" action="insertar_reserva.php" method="post" onsubmit="return validarReserva();">
        ID Cliente: <input type="number" name="id_cliente" required><br>
        Fecha de Reserva: <input type="date" name="fecha_reserva" required><br>
        ID Vuelo: <input type="number" name="id_vuelo" required><br>
        ID Hotel: <input type="number" name="id_hotel" required><br>
        <input type="submit" value="Agregar Reserva">
    </form>
</body>
</html>
