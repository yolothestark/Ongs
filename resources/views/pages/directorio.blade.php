@extends('layouts.app')

@section('content') 
<div class="bg-light py-5"> 
    <section class="container"> 
        <h1 class="display-5 fw-bold mb-0">Directorio de Organizaciones</h1> 
        <p class="text-muted mt-2">Encuentra la causa perfecta para ti aplicando nuestros filtros o buscando por nombre.</p>
    </section> 
</div>

<div class="container py-5 mt-4">
    <div class="row">
        
        <aside class="col-12 col-md-3 mb-4"> 
            <div class="card shadow-sm border-0 rounded-lg sticky-top" style="top: 20px;">
                <div class="card-header bg-dark text-white border-bottom-0 pt-3 pb-3">
                    <h5 class="font-bold mb-0">Búsqueda y Filtros</h5>
                </div>
                <div class="card-body">
                    
                    <h6 class="fw-bold text-danger mb-2">Buscar por Nombre</h6>
                    <div class="mb-4">
                        <input type="text" id="buscador-nombre" class="form-control" placeholder="Ej. RenuevaTech...">
                    </div>

                    <hr>

                    <h6 class="fw-bold text-primary mb-3 mt-3">1. Temática Principal</h6>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="tema-todos" checked>
                        <label class="form-check-label" for="tema-todos"><strong>Mostrar Todas</strong></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="tema-educacion">
                        <label class="form-check-label" for="tema-educacion">Educación</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="tema-ecologia">
                        <label class="form-check-label" for="tema-ecologia">Ecología</label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="tema-tecnologia">
                        <label class="form-check-label" for="tema-tecnologia">Tecnología</label>
                    </div>

                    <hr>

                    <h6 class="fw-bold text-success mb-3 mt-3">2. Alcance Geográfico</h6>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="alcance-todos" checked>
                        <label class="form-check-label" for="alcance-todos"><strong>Mostrar Todos</strong></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="alcance-local">
                        <label class="form-check-label" for="alcance-local">Local</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="alcance-regional">
                        <label class="form-check-label" for="alcance-regional">Regional</label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="alcance-nacional">
                        <label class="form-check-label" for="alcance-nacional">Nacional</label>
                    </div>

                    <hr>

                    <h6 class="fw-bold text-info mb-3 mt-3">3. Tipo de Apoyo</h6>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="apoyo-todos" checked>
                        <label class="form-check-label" for="apoyo-todos"><strong>Mostrar Todos</strong></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="apoyo-donaciones">
                        <label class="form-check-label" for="apoyo-donaciones">Donaciones</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="apoyo-voluntariado">
                        <label class="form-check-label" for="apoyo-voluntariado">Voluntariado</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="apoyo-capacitacion">
                        <label class="form-check-label" for="apoyo-capacitacion">Capacitación</label>
                    </div>

                </div>
            </div>
        </aside>

        <main class="col-12 col-md-9">
            <div class="row g-4" id="contenedor-ongs">

                <article class="articulo tema-tecnologia alcance-local apoyo-donaciones nombre-renuevatech col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <span class="badge bg-primary mb-2">Tecnología</span> <span class="badge bg-secondary mb-2">Local</span>
                            <h5 class="fw-bold">RenuevaTech</h5>
                            <p class="text-sm text-muted">Recolección de hardware para donarlo a estudiantes de la ciudad.</p>
                            <small class="text-info fw-bold">Donaciones</small>
                        </div>
                    </div>
                </article>

                <article class="articulo tema-ecologia alcance-regional apoyo-voluntariado nombre-bosqueslibres col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <span class="badge bg-success mb-2">Ecología</span> <span class="badge bg-secondary mb-2">Regional</span>
                            <h5 class="fw-bold">Bosques Libres</h5>
                            <p class="text-sm text-muted">Brigadas de reforestación en los estados del occidente del país.</p>
                            <small class="text-info fw-bold">Voluntariado</small>
                        </div>
                    </div>
                </article>

                <article class="articulo tema-educacion alcance-nacional apoyo-capacitacion nombre-codigoabierto col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <span class="badge bg-warning text-dark mb-2">Educación</span> <span class="badge bg-secondary mb-2">Nacional</span>
                            <h5 class="fw-bold">Código Abierto</h5>
                            <p class="text-sm text-muted">Cursos gratuitos de programación web para jóvenes en todo el país.</p>
                            <small class="text-info fw-bold">Capacitación</small>
                        </div>
                    </div>
                </article>

                <article class="articulo tema-educacion alcance-local apoyo-voluntariado nombre-lecturaparatodos col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <span class="badge bg-warning text-dark mb-2">Educación</span> <span class="badge bg-secondary mb-2">Local</span>
                            <h5 class="fw-bold">Lectura Para Todos</h5>
                            <p class="text-sm text-muted">Círculos de lectura en bibliotecas públicas municipales.</p>
                            <small class="text-info fw-bold">Voluntariado</small>
                        </div>
                    </div>
                </article>

                <article class="articulo tema-ecologia alcance-nacional apoyo-donaciones nombre-salvemoseioceano col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <span class="badge bg-success mb-2">Ecología</span> <span class="badge bg-secondary mb-2">Nacional</span>
                            <h5 class="fw-bold">Salvemos el Océano</h5>
                            <p class="text-sm text-muted">Fondo nacional para la limpieza de playas y protección marina.</p>
                            <small class="text-info fw-bold">Donaciones</small>
                        </div>
                    </div>
                </article>

                <article class="articulo tema-tecnologia alcance-regional apoyo-capacitacion nombre-mujeresentech col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <span class="badge bg-primary mb-2">Tecnología</span> <span class="badge bg-secondary mb-2">Regional</span>
                            <h5 class="fw-bold">Mujeres en Tech</h5>
                            <p class="text-sm text-muted">Bootcamps intensivos para mujeres interesadas en la ciencia de datos.</p>
                            <small class="text-info fw-bold">Capacitación</small>
                        </div>
                    </div>
                </article>

                <article class="articulo tema-ecologia tema-tecnologia alcance-local apoyo-voluntariado nombre-reciclajeinteligente col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <span class="badge bg-dark mb-2">EcoTech</span> <span class="badge bg-secondary mb-2">Local</span>
                            <h5 class="fw-bold">Reciclaje Inteligente</h5>
                            <p class="text-sm text-muted">Desarrollo de apps para mapear zonas de reciclaje en la ciudad.</p>
                            <small class="text-info fw-bold">Voluntariado</small>
                        </div>
                    </div>
                </article>

                <article class="articulo tema-educacion alcance-regional apoyo-donaciones nombre-mochilasllenas col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <span class="badge bg-warning text-dark mb-2">Educación</span> <span class="badge bg-secondary mb-2">Regional</span>
                            <h5 class="fw-bold">Mochilas Llenas</h5>
                            <p class="text-sm text-muted">Colecta de útiles escolares para comunidades rurales del estado.</p>
                            <small class="text-info fw-bold">Donaciones</small>
                        </div>
                    </div>
                </article>

                <article class="articulo tema-tecnologia alcance-nacional apoyo-voluntariado nombre-internetdigno col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <span class="badge bg-primary mb-2">Tecnología</span> <span class="badge bg-secondary mb-2">Nacional</span>
                            <h5 class="fw-bold">Internet Digno</h5>
                            <p class="text-sm text-muted">Instalación de antenas comunitarias en zonas de difícil acceso.</p>
                            <small class="text-info fw-bold">Voluntariado</small>
                        </div>
                    </div>
                </article>

                <article class="articulo tema-educacion alcance-local apoyo-capacitacion nombre-aulascomunitarias col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <span class="badge bg-warning text-dark mb-2">Educación</span> <span class="badge bg-secondary mb-2">Local</span>
                            <h5 class="fw-bold">Aulas Comunitarias</h5>
                            <p class="text-sm text-muted">Talleres de regularización matemática impartidos por universitarios.</p>
                            <small class="text-info fw-bold">Capacitación</small>
                        </div>
                    </div>
                </article>

                <article class="articulo tema-ecologia alcance-regional apoyo-donaciones nombre-rescateanimal col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <span class="badge bg-success mb-2">Ecología</span> <span class="badge bg-secondary mb-2">Regional</span>
                            <h5 class="fw-bold">Rescate Animal</h5>
                            <p class="text-sm text-muted">Refugio regional que rehabilita fauna nativa afectada por incendios.</p>
                            <small class="text-info fw-bold">Donaciones</small>
                        </div>
                    </div>
                </article>

                <article class="articulo tema-tecnologia alcance-nacional apoyo-donaciones nombre-programacionkids col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <span class="badge bg-primary mb-2">Tecnología</span> <span class="badge bg-secondary mb-2">Nacional</span>
                            <h5 class="fw-bold">Programación Kids</h5>
                            <p class="text-sm text-muted">Entrega de mini-ordenadores Raspberry a niños de escasos recursos.</p>
                            <small class="text-info fw-bold">Donaciones</small>
                        </div>
                    </div>
                </article>

            </div>
        </main>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    vincularFiltros();
});

function vincularFiltros() {
    // EVENTO DEL BUSCADOR DE TEXTO
    document.getElementById('buscador-nombre').addEventListener('keyup', procesarLogicaFiltros);

    // CATEGORÍA 1: TEMÁTICA
    document.getElementById('tema-educacion').addEventListener('change', procesarLogicaFiltros);
    document.getElementById('tema-ecologia').addEventListener('change', procesarLogicaFiltros);
    document.getElementById('tema-tecnologia').addEventListener('change', procesarLogicaFiltros);
    document.getElementById('tema-todos').addEventListener('change', reiniciarTematica);

    // CATEGORÍA 2: ALCANCE
    document.getElementById('alcance-local').addEventListener('change', procesarLogicaFiltros);
    document.getElementById('alcance-regional').addEventListener('change', procesarLogicaFiltros);
    document.getElementById('alcance-nacional').addEventListener('change', procesarLogicaFiltros);
    document.getElementById('alcance-todos').addEventListener('change', reiniciarAlcance);

    // CATEGORÍA 3: APOYO
    document.getElementById('apoyo-donaciones').addEventListener('change', procesarLogicaFiltros);
    document.getElementById('apoyo-voluntariado').addEventListener('change', procesarLogicaFiltros);
    document.getElementById('apoyo-capacitacion').addEventListener('change', procesarLogicaFiltros);
    document.getElementById('apoyo-todos').addEventListener('change', reiniciarApoyo);
}

// Funciones explícitas para reiniciar los checks de "Mostrar Todos"
function reiniciarTematica() {
    document.getElementById('tema-educacion').checked = false;
    document.getElementById('tema-ecologia').checked = false;
    document.getElementById('tema-tecnologia').checked = false;
    procesarLogicaFiltros();
}
function reiniciarAlcance() {
    document.getElementById('alcance-local').checked = false;
    document.getElementById('alcance-regional').checked = false;
    document.getElementById('alcance-nacional').checked = false;
    procesarLogicaFiltros();
}
function reiniciarApoyo() {
    document.getElementById('apoyo-donaciones').checked = false;
    document.getElementById('apoyo-voluntariado').checked = false;
    document.getElementById('apoyo-capacitacion').checked = false;
    procesarLogicaFiltros();
}

function procesarLogicaFiltros() {
    // 1. Obtener y limpiar el texto del buscador
    var textoBuscado = document.getElementById('buscador-nombre').value.toLowerCase().split(' ').join('');

    // 2. Obtener estado de los checkboxes
    var chkEdu = document.getElementById('tema-educacion').checked;
    var chkEco = document.getElementById('tema-ecologia').checked;
    var chkTech = document.getElementById('tema-tecnologia').checked;

    var chkLocal = document.getElementById('alcance-local').checked;
    var chkRegional = document.getElementById('alcance-regional').checked;
    var chkNacional = document.getElementById('alcance-nacional').checked;

    var chkDonacion = document.getElementById('apoyo-donaciones').checked;
    var chkVoluntariado = document.getElementById('apoyo-voluntariado').checked;
    var chkCapacitacion = document.getElementById('apoyo-capacitacion').checked;

    // Verificar si hay filtros activos por bloque
    var hayFiltroTema = chkEdu || chkEco || chkTech;
    var hayFiltroAlcance = chkLocal || chkRegional || chkNacional;
    var hayFiltroApoyo = chkDonacion || chkVoluntariado || chkCapacitacion;

    // Actualizar casillas visuales de "Todos"
    document.getElementById('tema-todos').checked = !hayFiltroTema;
    document.getElementById('alcance-todos').checked = !hayFiltroAlcance;
    document.getElementById('apoyo-todos').checked = !hayFiltroApoyo;

    // 3. Capturar divisiones por ClassName
    var articulos = document.getElementsByClassName('articulo');

    // 4. Bucle principal para evaluar condiciones
    for (var i = 0; i < articulos.length; i++) {
        var articulo = articulos[i];
        var clases = articulo.className;

        // Ocultar por defecto usando display
        articulo.style.display = 'none'; 

        // Evaluaciones de Inclusión (dentro de la misma categoría)
        var cumpleTema = (!hayFiltroTema) || 
                         (chkEdu && clases.includes('tema-educacion')) || 
                         (chkEco && clases.includes('tema-ecologia')) || 
                         (chkTech && clases.includes('tema-tecnologia'));

        var cumpleAlcance = (!hayFiltroAlcance) || 
                            (chkLocal && clases.includes('alcance-local')) || 
                            (chkRegional && clases.includes('alcance-regional')) || 
                            (chkNacional && clases.includes('alcance-nacional'));

        var cumpleApoyo = (!hayFiltroApoyo) || 
                          (chkDonacion && clases.includes('apoyo-donaciones')) || 
                          (chkVoluntariado && clases.includes('apoyo-voluntariado')) || 
                          (chkCapacitacion && clases.includes('apoyo-capacitacion'));

        // Evaluación del Buscador por clase
        var pasaBusqueda = true;
        if (textoBuscado !== "") {
            if (clases.includes(textoBuscado)) {
                pasaBusqueda = true;
            } else {
                pasaBusqueda = false;
            }
        }

        // Mostrar solo si cumple las categorías Y la búsqueda (Exclusión)
        if (cumpleTema && cumpleAlcance && cumpleApoyo && pasaBusqueda) {
            articulo.style.display = 'block'; 
        }
    }
}
</script>
@endsection