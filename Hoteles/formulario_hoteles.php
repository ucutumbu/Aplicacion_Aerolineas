<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Hoteles</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="../js/validaciones.js"></script>
</head>
<body>
    <h2>Agregar Hotel</h2>
    <form action="insertar_hotel.php" method="post" onsubmit="return validarHotel();">
        Nombre: <input type="text" name="nombre" required><br>
        Ubicación: <input type="text" name="ubicacion" required><br>
        Habitaciones Disponibles: <input type="number" name="habitaciones" required><br>
        Tarifa por Noche: <input type="text" name="tarifa" required><br>
        <input type="submit" value="Agregar Hotel">
    </form>
</body>
</html>
