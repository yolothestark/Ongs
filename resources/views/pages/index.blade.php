@extends('layouts.app')

@section('content')
    <section class="container py-5 mt-4">
        <div class="row d-flex align-items-center">
            <article class="col-md-6 pe-md-5">
                <h1 class="display-4 fw-bold mb-4">Encuentra las organizaciones que transforman tu comunidad</h1>
                <p class="lead text-secondary mb-4">Conecta con miles de ONGs trabajando en causas que importan. Descubre misiones, ubicaciones y formas de apoyar el cambio social desde tu región.</p>
                <div class="d-flex gap-3">
                    <button class="btn btn-info text-white px-4 py-2 fw-bold">Explorar</button>
                    <button class="btn btn-light border px-4 py-2 fw-bold">Aprender</button>
                </div>
            </article>
            <aside class="col-md-6 mt-4 mt-md-0">
                <img src="{{ asset('img/hero.jpg') }}" alt="Equipo" class="img-fluid rounded-4 shadow">
            </aside>
        </div>
    </section>

    <div class="bg-secondary py-5 mt-5">
        <section class="container py-4">
            <div class="row align-items-start">
                <div class="col-md-5">
                    <span class="fw-bold text-uppercase text-dark">Plataforma</span>
                    <h2 class="display-5 fw-bold text-dark">Tu puerta al<br>cambio</h2>
                </div>
                <div class="col-md-7">
                    <p class="fs-5 mb-4 text-secondary">Acceso directo a información verificada sobre organizaciones no gubernamentales. Conoce sus trabajos, ubicación y cómo conectar con ellas.</p>
                    <div class="d-flex gap-3">
                        <button class="btn btn-info text-white px-4 py-2 fw-bold">Buscar</button>
                        <button class="btn btn-outline-dark px-4 py-2 fw-bold">Saber más</button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="container text-center py-5 mt-5">
        <span class="fw-bold text-uppercase text-secondary">Capacidades</span>
        <h2 class="h1 fw-bold mb-2">Lo que ofrecemos</h2>
        <p class="text-secondary mb-5">Herramientas para conectar con el trabajo que importa</p>
        
        <div class="row text-start g-4">
            <div class="col-md-4">
                <div class="card card-fondo-img text-white border-0 rounded-4" style="background-image: url('{{ asset('img/cap1.jpg') }}');">
                    <div class="card-overlay"></div>
                    <div class="p-4 w-100">
                        <h3 class="h4 fw-bold">Búsqueda inteligente de organizaciones</h3>
                        <p class="small text-light">Localiza ONGs por nombre, misión o área de trabajo</p>
                        <a href="#" class="text-white text-decoration-none fw-bold">Descubrir ></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-fondo-img text-white border-0 rounded-4" style="background-image: url('{{ asset('img/cap2.jpg') }}');">
                    <div class="card-overlay"></div>
                    <div class="p-4 w-100">
                        <h3 class="h4 fw-bold">Filtros por ubicación y especialidad</h3>
                        <p class="small text-light">Refina resultados según tu región y causa preferida</p>
                        <a href="#" class="text-white text-decoration-none fw-bold">Explorar ></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-fondo-img text-white border-0 rounded-4" style="background-image: url('{{ asset('img/cap3.jpg') }}');">
                    <div class="card-overlay"></div>
                    <div class="p-4 w-100">
                        <h3 class="h4 fw-bold">Información de contacto verificada</h3>
                        <p class="small text-light">Comunicate directamente con las organizaciones</p>
                        <a href="#" class="text-white text-decoration-none fw-bold">Conectar ></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container text-center py-5 mt-5">
        <span class="fw-bold text-uppercase text-secondary">Ventajas</span>
        <h2 class="h1 fw-bold mb-2">Por qué elegirnos</h2>
        <p class="text-secondary mb-5">Una plataforma diseñada para facilitar encuentros significativos</p>

        <div class="row text-start g-5">
            <article class="col-md-6">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                    <img src="{{ asset('img/ven1.jpg') }}" alt="Usuarios" class="card-img-top" style="height: 250px; object-fit: cover;">
                    <div class="card-body p-5">
                        <span class="text-secondary fw-bold small text-uppercase">Usuarios</span>
                        <h3 class="h4 fw-bold mt-2 mb-3">Acceso transparente a organizaciones verificadas</h3>
                        <p class="text-secondary mb-4">Encuentra exactamente dónde y cómo contribuir a causas que te importan verdaderamente</p>
                        <div class="d-flex gap-3 align-items-center">
                            <button class="btn btn-light border px-4 py-2 fw-bold">Unirse</button>
                            <a href="#" class="text-dark fw-bold text-decoration-none">Leer ></a>
                        </div>
                    </div>
                </div>
            </article>
            
            <article class="col-md-6">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                    <img src="{{ asset('img/ven2.jpg') }}" alt="Organizaciones" class="card-img-top" style="height: 250px; object-fit: cover;">
                    <div class="card-body p-5">
                        <span class="text-secondary fw-bold small text-uppercase">Organizaciones</span>
                        <h3 class="h4 fw-bold mt-2 mb-3">Visibilidad para tu trabajo social</h3>
                        <p class="text-secondary mb-4">Expande tu alcance y conecta con personas dispuestas a apoyar tu misión en la comunidad</p>
                        <div class="d-flex gap-3 align-items-center">
                            <button class="btn btn-light border px-4 py-2 fw-bold">Registrar</button>
                            <a href="#" class="text-dark fw-bold text-decoration-none">Saber ></a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <div class="py-5 mt-5" style="background-color: #e2e8f0;">
        <section class="container py-5 text-center">
            <h2 class="display-6 fw-bold mb-2">Preguntas</h2>
            <p class="text-secondary mb-5">Resolvemos tus dudas sobre cómo funciona Directorio de ONGs</p>
            
            <div class="row justify-content-center text-start">
                <div class="col-md-8 d-flex flex-column gap-4">
                    <article>
                        <h3 class="h5 fw-bold">¿Cómo busco una ONG?</h3>
                        <p class="text-secondary mb-0">Usa la búsqueda por nombre, misión o área de trabajo. Puedes filtrar por ubicación y especialidad para encontrar exactamente lo que buscas en tu región.</p>
                    </article>
                    <article>
                        <h3 class="h5 fw-bold">¿Es segura la información?</h3>
                        <p class="text-secondary mb-0">Sí. Verificamos todos los datos de las organizaciones registradas para garantizar que recibas información confiable y actualizada.</p>
                    </article>
                    <article>
                        <h3 class="h5 fw-bold">¿Puedo contactar directamente?</h3>
                        <p class="text-secondary mb-0">Claro. Cada perfil incluye información de contacto verificada.</p>
                    </article>
                </div>
            </div>

            <div class="mt-5 pt-4">
                <h2 class="h3 fw-bold mb-2">¿Necesitas más ayuda?</h2>
                <p class="text-secondary mb-4">Nuestro equipo está disponible para resolver tus consultas.</p>
                <button class="btn btn-light border px-4 py-2 fw-bold bg-white">Contactar</button>
            </div>
        </section>
    </div>
@endsection