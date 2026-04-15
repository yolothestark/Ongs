@extends('layouts.app')

@section('content') 
<div class="bg-light py-5"> 
    <section class="container"> 
        <h1 class="display-5 fw-bold mb-0">Directorio de Organizaciones</h1> 
    </section> 
</div>

<div class="container py-5 mt-4">
    <div class="row">
        
        <aside class="col-12 col-md-3 mb-4"> 
            <div class="card shadow-sm border-0 rounded-lg">
                <div class="card-header bg-white border-bottom-0 pt-4 pb-2">
                    <h5 class="font-bold text-lg mb-0">Categorías</h5>
                </div>
                <div class="card-body d-flex flex-column gap-2">
                    <button id="btn-todos" data-categoria="todos" class="btn btn-dark w-100 text-start">Mostrar Todas</button>
                    <button id="btn-edu" data-categoria="educacion" class="btn btn-outline-primary w-100 text-start">Educación</button>
                    <button id="btn-eco" data-categoria="ecologia" class="btn btn-outline-success w-100 text-start">Ecología</button>
                    <button id="btn-tech" data-categoria="tecnologia" class="btn btn-outline-info w-100 text-start">Tecnología</button>
                    <button id="btn-cultura" data-categoria="cultura" class="btn btn-outline-warning w-100 text-start">Cultura</button>
                    <button id="btn-salud" data-categoria="salud" class="btn btn-outline-danger w-100 text-start">Salud</button>
                </div>
            </div>
        </aside>

        <main class="col-12 col-md-9">
            <div class="row g-4" id="contenedor-ongs">

                <article class="articulo tecnologia col-12 col-md-6 col-lg-6">
                    <div class="card h-100 shadow-sm rounded-lg border-0">
                        <div class="card-body">
                            <span class="badge bg-info text-dark mb-2">Tecnología</span>
                            <h5 class="card-title fw-bold text-xl mb-3">RenuevaTech A.C.</h5>
                            <p class="card-text text-secondary text-sm">
                                Dedicados al rescate y mantenimiento de hardware. Recolectamos equipos, instalamos módulos de memoria RAM y unidades SSD para optimizar entornos de desarrollo, y los donamos a estudiantes de ingeniería de bajos recursos.
                            </p>
                        </div>
                        <div class="card-footer bg-white border-0 pb-3">
                            <a href="#" class="btn btn-sm btn-primary w-100">Ver impacto social</a>
                        </div>
                    </div>
                </article>

                <article class="articulo cultura col-12 col-md-6 col-lg-6">
                    <div class="card h-100 shadow-sm rounded-lg border-0">
                        <div class="card-body">
                            <span class="badge bg-warning text-dark mb-2">Cultura</span>
                            <h5 class="card-title fw-bold text-xl mb-3">Luz y Claqueta</h5>
                            <p class="card-text text-secondary text-sm">
                                Organización enfocada en la preservación y difusión del cine mexicano. Realizamos proyecciones independientes, foros de discusión y apoyamos a jóvenes cineastas a financiar sus primeros cortometrajes.
                            </p>
                        </div>
                        <div class="card-footer bg-white border-0 pb-3">
                            <a href="#" class="btn btn-sm btn-primary w-100">Ver impacto social</a>
                        </div>
                    </div>
                </article>

                <article class="articulo educacion col-12 col-md-6 col-lg-6">
                    <div class="card h-100 shadow-sm rounded-lg border-0">
                        <div class="card-body">
                            <span class="badge bg-primary mb-2">Educación</span>
                            <h5 class="card-title fw-bold text-xl mb-3">Código Abierto México</h5>
                            <p class="card-text text-secondary text-sm">
                                Impulsamos el talento joven enseñando desarrollo web Full-Stack. Brindamos talleres gratuitos sobre frameworks modernos como Laravel y Tailwind CSS para preparar a la próxima generación de programadores.
                            </p>
                        </div>
                        <div class="card-footer bg-white border-0 pb-3">
                            <a href="#" class="btn btn-sm btn-primary w-100">Ver impacto social</a>
                        </div>
                    </div>
                </article>

                <article class="articulo ecologia col-12 col-md-6 col-lg-6">
                    <div class="card h-100 shadow-sm rounded-lg border-0">
                        <div class="card-body">
                            <span class="badge bg-success mb-2">Ecología</span>
                            <h5 class="card-title fw-bold text-xl mb-3">Reserva Salvaje</h5>
                            <p class="card-text text-secondary text-sm">
                                Protección de ecosistemas de mundo abierto y áreas naturales protegidas. Coordinamos brigadas de limpieza, reforestación y conservación de fauna local en zonas montañosas y bosques.
                            </p>
                        </div>
                        <div class="card-footer bg-white border-0 pb-3">
                            <a href="#" class="btn btn-sm btn-primary w-100">Ver impacto social</a>
                        </div>
                    </div>
                </article>

                <article class="articulo salud col-12 col-md-6 col-lg-6">
                    <div class="card h-100 shadow-sm rounded-lg border-0">
                        <div class="card-body">
                            <span class="badge bg-danger mb-2">Salud</span>
                            <h5 class="card-title fw-bold text-xl mb-3">Latidos de Esperanza</h5>
                            <p class="card-text text-secondary text-sm">
                                Llevamos servicios médicos de primer nivel y consultas preventivas a comunidades rurales e indígenas que no cuentan con acceso a infraestructura hospitalaria cercana.
                            </p>
                        </div>
                        <div class="card-footer bg-white border-0 pb-3">
                            <a href="#" class="btn btn-sm btn-primary w-100">Ver impacto social</a>
                        </div>
                    </div>
                </article>

                <article class="articulo tecnologia col-12 col-md-6 col-lg-6">
                    <div class="card h-100 shadow-sm rounded-lg border-0">
                        <div class="card-body">
                            <span class="badge bg-info text-dark mb-2">Tecnología</span>
                            <h5 class="card-title fw-bold text-xl mb-3">Conexión Global</h5>
                            <p class="card-text text-secondary text-sm">
                                Facilitamos el acceso a internet en escuelas públicas mediante la instalación y gestión de redes. También alfabetizamos digitalmente a familias en el uso de plataformas educativas y correos electrónicos.
                            </p>
                        </div>
                        <div class="card-footer bg-white border-0 pb-3">
                            <a href="#" class="btn btn-sm btn-primary w-100">Ver impacto social</a>
                        </div>
                    </div>
                </article>

            </div>
        </main>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {

    // 1. Capturar todos los botones por su ID
    const btnTodos = document.getElementById("btn-todos");
    const btnEdu = document.getElementById("btn-edu");
    const btnEco = document.getElementById("btn-eco");
    const btnTech = document.getElementById("btn-tech");
    const btnCultura = document.getElementById("btn-cultura");
    const btnSalud = document.getElementById("btn-salud");

    // 2. Capturar todos los artículos por clase
    const articulos = document.getElementsByClassName("articulo");

    // 3. Función para mostrar todos
    function mostrarTodos() {
        for (let i = 0; i < articulos.length; i++) {
            articulos[i].classList.remove("hidden");
        }
    }

    // 4. Función central para filtrar por categoría
    function filtrarCategoria(categoria) {
        for (let i = 0; i < articulos.length; i++) {
            // Primero ocultamos el artículo
            articulos[i].classList.add("hidden");

            // Si contiene la clase de la categoría que buscamos, le quitamos el 'hidden'
            if (articulos[i].classList.contains(categoria)) {
                articulos[i].classList.remove("hidden");
            }
        }
    }

    // 5. Asignar Eventos a cada botón (usando dataset como lo tenías)
    btnTodos.addEventListener("click", function () {
        mostrarTodos();
    });

    btnEdu.addEventListener("click", function () {
        filtrarCategoria(this.dataset.categoria);
    });

    btnEco.addEventListener("click", function () {
        filtrarCategoria(this.dataset.categoria);
    });

    btnTech.addEventListener("click", function () {
        filtrarCategoria(this.dataset.categoria);
    });

    btnCultura.addEventListener("click", function () {
        filtrarCategoria(this.dataset.categoria);
    });

    btnSalud.addEventListener("click", function () {
        filtrarCategoria(this.dataset.categoria);
    });

});
</script>

@endsection