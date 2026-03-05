@extends('layouts.app')

@section('content')
    <section class="seccion-encabezado contenedor-principal">
        <h1>Áreas de Trabajo</h1>
        <p>Estructura: Explora las diferentes causas que apoyamos estructuralmente.</p>
    </section>

    <section class="seccion-grid-areas contenedor-principal">
        <div class="grid-tres-columnas">
            <article class="tarjeta-area">
                <div class="icono-placeholder">[Icono]</div>
                <h2>Salud</h2>
                <p>Contenido sección 1...</p>
            </article>
            <article class="tarjeta-area">
                <div class="icono-placeholder">[Icono]</div>
                <h2>Educación</h2>
                <p>Contenido sección 2...</p>
            </article>
            <article class="tarjeta-area">
                <div class="icono-placeholder">[Icono]</div>
                <h2>Medio Ambiente</h2>
                <p>Contenido sección 3...</p>
            </article>
        </div>
    </section>
@endsection