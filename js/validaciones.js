function validarVuelo() {
    var origen = document.forms["formulario_vuelos"]["origen"].value;
    var destino = document.forms["formulario_vuelos"]["destino"].value;
    if (origen == "" || destino == "") {
        alert("Origen y Destino son obligatorios");
        return false;
    }
    return true;
}

function validarHotel() {
    var nombre = document.forms["formulario_hoteles"]["nombre"].value;
    var ubicacion = document.forms["formulario_hoteles"]["ubicacion"].value;
    if (nombre == "" || ubicacion == "") {
        alert("Nombre y Ubicación son obligatorios");
        return false;
    }
    return true;
}
function validarReserva() {
    var id_cliente = document.forms["formulario_reserva"]["id_cliente"].value;
    var fecha_reserva = document.forms["formulario_reserva"]["fecha_reserva"].value;
    var id_vuelo = document.forms["formulario_reserva"]["id_vuelo"].value;
    var id_hotel = document.forms["formulario_reserva"]["id_hotel"].value;
    
    if (id_cliente == "" || fecha_reserva == "" || id_vuelo == "" || id_hotel == "") {
        alert("Todos los campos son obligatorios.");
        return false;
    }
    return true;
}