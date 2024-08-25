<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Vuelos</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="../js/validaciones.js"></script>
</head>
<body>
    <h2>Agregar Vuelo</h2>
    <form action="insertar_vuelo.php" method="post" onsubmit="return validarVuelo();">
        Origen: <input type="text" name="origen" required><br>
        Destino: <input type="text" name="destino" required><br>
        Fecha: <input type="date" name="fecha" required><br>
        Plazas Disponibles: <input type="number" name="plazas" required><br>
        Precio: <input type="text" name="precio" required><br>
        <input type="submit" value="Agregar Vuelo">
    </form>
</body>
</html>
