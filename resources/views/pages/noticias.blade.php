@extends('layouts.app')

@section('content')
    <div class="contenedor-principal layout-dos-columnas-align align-top">
        <section class="seccion-feed-noticias">
            <h1>Noticias del Sector</h1>
            <article class="tarjeta-noticia">
                <div class="placeholder-img-pequena">[Imagen Noticia]</div>
                <h2>Título de noticia de prueba</h2>
                <p>Resumen del artículo de prueba estructural...</p>
            </article>
        </section>

        <aside class="barra-lateral-blog">
            <h3>Categorías</h3>
            <ul>
                <li><a href="#">Eventos</a></li>
                <li><a href="#">Voluntariado</a></li>
            </ul>
        </aside>
    </div>
@endsection