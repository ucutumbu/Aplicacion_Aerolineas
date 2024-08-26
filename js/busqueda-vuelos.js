// Lista simulada de vuelos disponibles
const vuelosDisponibles = [
    { origen: "Madrid", destino: "Nueva York", fecha: "2024-09-01", precio: 500 },
    { origen: "Madrid", destino: "París", fecha: "2024-09-02", precio: 150 },
    { origen: "Barcelona", destino: "Londres", fecha: "2024-09-01", precio: 200 },
    { origen: "Madrid", destino: "Londres", fecha: "2024-09-03", precio: 250 },
    { origen: "Londres", destino: "Nueva York", fecha: "2024-09-01", precio: 600 }
];

document.getElementById('searchForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita que el formulario se envíe de la manera tradicional

    // Obtiene los valores de los campos del formulario
    const origen = document.getElementById('origen').value.trim();
    const destino = document.getElementById('destino').value.trim();
    const fecha = document.getElementById('fecha').value;

    // Filtra los vuelos basados en los criterios de búsqueda
    const resultados = vuelosDisponibles.filter(vuelo => 
        vuelo.origen.toLowerCase() === origen.toLowerCase() &&
        vuelo.destino.toLowerCase() === destino.toLowerCase() &&
        vuelo.fecha === fecha
    );

    // Muestra los resultados en la página
    const resultadosElement = document.getElementById('resultados');
    resultadosElement.innerHTML = ''; // Limpia los resultados anteriores

    if (resultados.length > 0) {
        resultados.forEach(vuelo => {
            const li = document.createElement('li');
            li.textContent = `Origen: ${vuelo.origen}, Destino: ${vuelo.destino}, Fecha: ${vuelo.fecha}, Precio: $${vuelo.precio}`;
            resultadosElement.appendChild(li);
        });
    } else {
        resultadosElement.textContent = 'No se encontraron vuelos para los criterios de búsqueda especificados.';
    }
});
