<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agencia de Viajes</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h2>Bienvenido a la Agencia de Viajes</h2>
    <ul class="menu">
        <li><a href="vuelos/formulario_vuelos.php">Agregar Vuelo</a></li>
        <li><a href="hoteles/formulario_hoteles.php">Agregar Hotel</a></li>
        <li><a href="reservas/formulario_reserva.php">Agregar Reserva</a></li>
        <li><a href="consultas/consulta_reservas.php">Consultar Reservas</a></li>
    </ul>

    <!-- Formulario de búsqueda de vuelos -->
    <h2>Buscar Vuelos</h2>
    <form id="searchForm">
        <label for="origen">Origen:</label>
        <input type="text" id="origen" name="origen" required>
        <br>
        <label for="destino">Destino:</label>
        <input type="text" id="destino" name="destino" required>
        <br>
        <label for="fecha">Fecha (YYYY-MM-DD):</label>
        <input type="date" id="fecha" name="fecha" required>
        <br>
        <button type="submit">Buscar</button>
    </form>

    <h2>Resultados:</h2>
    <ul id="resultados"></ul>

    <!-- Incluir el archivo JavaScript -->
    <script src="js/busqueda-vuelos.js"></script>
</body>
</html>
