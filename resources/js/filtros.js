// Asignar eventos cuando el documento cargue
document.addEventListener("DOMContentLoaded", function() {
    vincularEventos();
});

// Función explícita para vincular mediante addEventListener y ById
function vincularEventos() {
    // Checkboxes de Sector
    document.getElementById('sector-salud').addEventListener('change', procesarFiltros);
    document.getElementById('sector-educacion').addEventListener('change', procesarFiltros);
    document.getElementById('sector-ambiente').addEventListener('change', procesarFiltros);
    document.getElementById('sector-todos').addEventListener('change', reiniciarSector);

    // Checkboxes de Alcance
    document.getElementById('alcance-local').addEventListener('change', procesarFiltros);
    document.getElementById('alcance-nacional').addEventListener('change', procesarFiltros);
    document.getElementById('alcance-internacional').addEventListener('change', procesarFiltros);
    document.getElementById('alcance-todos').addEventListener('change', reiniciarAlcance);

    // Checkboxes de Población
    document.getElementById('poblacion-infantil').addEventListener('change', procesarFiltros);
    document.getElementById('poblacion-adultos').addEventListener('change', procesarFiltros);
    document.getElementById('poblacion-general').addEventListener('change', procesarFiltros);
    document.getElementById('poblacion-todos').addEventListener('change', reiniciarPoblacion);
}

// Funciones explícitas para los checkboxes de "Todos"
function reiniciarSector() {
    document.getElementById('sector-salud').checked = false;
    document.getElementById('sector-educacion').checked = false;
    document.getElementById('sector-ambiente').checked = false;
    procesarFiltros();
}

function reiniciarAlcance() {
    document.getElementById('alcance-local').checked = false;
    document.getElementById('alcance-nacional').checked = false;
    document.getElementById('alcance-internacional').checked = false;
    procesarFiltros();
}

function reiniciarPoblacion() {
    document.getElementById('poblacion-infantil').checked = false;
    document.getElementById('poblacion-adultos').checked = false;
    document.getElementById('poblacion-general').checked = false;
    procesarFiltros();
}

// Función explícita para ocultar todas las divisiones mediante ClassName
function ocultarTodasLasONGs() {
    var ongs = document.getElementsByClassName('ong-item');
    for (var i = 0; i < ongs.length; i++) {
        ongs[i].style.display = 'none'; // Ocultar mediante display
    }
}

// Función principal que evalúa las inclusiones y exclusiones
function procesarFiltros() {
    // Paso 1: Ocultar todo como sugiere la instrucción
    ocultarTodasLasONGs();

    // Paso 2: Leer el estado de todos los checkboxes mediante ById
    var chkSalud = document.getElementById('sector-salud').checked;
    var chkEducacion = document.getElementById('sector-educacion').checked;
    var chkAmbiente = document.getElementById('sector-ambiente').checked;
    
    var chkLocal = document.getElementById('alcance-local').checked;
    var chkNacional = document.getElementById('alcance-nacional').checked;
    var chkInternacional = document.getElementById('alcance-internacional').checked;
    
    var chkInfantil = document.getElementById('poblacion-infantil').checked;
    var chkAdultos = document.getElementById('poblacion-adultos').checked;
    var chkGeneral = document.getElementById('poblacion-general').checked;

    // Detectar si hay al menos un filtro activo por categoría
    var filtroSectorActivo = chkSalud || chkEducacion || chkAmbiente;
    var filtroAlcanceActivo = chkLocal || chkNacional || chkInternacional;
    var filtroPoblacionActivo = chkInfantil || chkAdultos || chkGeneral;

    // Actualizar los checks de "Todos" visualmente
    document.getElementById('sector-todos').checked = !filtroSectorActivo;
    document.getElementById('alcance-todos').checked = !filtroAlcanceActivo;
    document.getElementById('poblacion-todos').checked = !filtroPoblacionActivo;

    // Paso 3: Obtener las divisiones mediante ClassName
    var ongs = document.getElementsByClassName('ong-item');

    // Paso 4: Recorrer e ir mostrando los que cumplen las condiciones
    for (var i = 0; i < ongs.length; i++) {
        var elemento = ongs[i];
        var clases = elemento.className;

        // LÓGICA DE INCLUSIÓN (OR dentro de la misma categoría)
        // Si no hay filtros activos en la categoría, automáticamente la cumple (true)
        var cumpleSector = !filtroSectorActivo || 
                           (chkSalud && clases.includes('sector-salud')) || 
                           (chkEducacion && clases.includes('sector-educacion')) || 
                           (chkAmbiente && clases.includes('sector-ambiente'));

        var cumpleAlcance = !filtroAlcanceActivo || 
                            (chkLocal && clases.includes('alcance-local')) || 
                            (chkNacional && clases.includes('alcance-nacional')) || 
                            (chkInternacional && clases.includes('alcance-internacional'));

        var cumplePoblacion = !filtroPoblacionActivo || 
                              (chkInfantil && clases.includes('poblacion-infantil')) || 
                              (chkAdultos && clases.includes('poblacion-adultos')) || 
                              (chkGeneral && clases.includes('poblacion-general'));

        // LÓGICA DE EXCLUSIÓN (AND entre categorías diferentes)
        // Solo se muestra si cumple simultáneamente con las reglas de las 3 categorías
        if (cumpleSector && cumpleAlcance && cumplePoblacion) {
            elemento.style.display = 'block'; // Mostrar mediante display
        }
    }
}