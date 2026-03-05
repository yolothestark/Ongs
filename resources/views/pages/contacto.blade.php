@extends('layouts.app')

@section('content')
    <section class="contenedor-principal grid-dos-columnas">
        <article class="info-contacto">
            <h1>Contacto</h1>
            <p>Estructura: Información de contacto de prueba.</p>
            <ul>
                <li>Email: prueba@estructural.com</li>
                <li>Tel: 123 456 7890</li>
            </ul>
        </article>

        <article class="area-formulario-contacto">
            <form class="formulario-estructural">
                <label>Mensaje:</label>
                <textarea rows="5" placeholder="Área de texto estructural..."></textarea>
                <button>Enviar Mensaje</button>
            </form>
        </article>
    </section>
@endsection