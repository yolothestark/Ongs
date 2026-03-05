@extends('layouts.app')

@section('content')
    <section class="seccion-hero contenedor-principal">
        <article class="hero-texto">
            <h1>Encuentra las organizaciones que transforman tu comunidad</h1>
            <p>Texto de prueba: Conecta con miles de ONGs trabajando en causas que importan. Descubre misiones, ubicaciones y formas de apoyar el cambio social desde tu región.</p>
            <div class="hero-botones">
                <button>Explorar</button>
                <button>Aprender</button>
            </div>
        </article>
        <aside class="hero-imagen">
            <div class="placeholder-img">(Wireframe Img)</div>
        </aside>
    </section>

    <section class="seccion-plataforma contenedor-principal">
        <h2>Plataforma: Tu puerta al cambio</h2>
        <p>Contenido estructural: Acceso directo a información verificada sobre organizaciones no gubernamentales. Conoce sus trabajos, ubicación y cómo conectar con ellas.</p>
        <div class="plataforma-busqueda">
            <input type="text" placeholder="Buscar">
            <button>Saber más</button>
        </div>
    </section>

    <section class="seccion-capacidades contenedor-principal">
        <header class="capacidades-header">
            <span>Capacidades</span>
            <h2>Lo que ofrecemos</h2>
            <p>Texto de prueba estructural</p>
        </header>
        <div class="grid-tres-columnas">
            <article class="tarjeta-capacidad">
                <div class="icono-placeholder">[Icono]</div>
                <h3>Búsqueda inteligente</h3>
                <p>Localiza ONGs por nombre, misión o área</p>
            </article>
            <article class="tarjeta-capacidad">
                <div class="icono-placeholder">[Icono]</div>
                <h3>Filtros por ubicación</h3>
                <p>Refina resultados según tu región</p>
            </article>
            <article class="tarjeta-capacidad">
                <div class="icono-placeholder">[Icono]</div>
                <h3>Información verificada</h3>
                <p>Comunicate directamente</p>
            </article>
        </div>
    </section>
@endsection