@extends('layouts.app')

@section('content')
    <section class="seccion-encabezado contenedor-principal">
        <h1>Participa con nosotros</h1>
        <p>Estructura: Registra tu ONG o únete como voluntario.</p>
    </section>

    <section class="seccion-formularios-registro contenedor-principal grid-dos-columnas">
        <article class="caja-registro">
            <h2>Registrar ONG</h2>
            <form class="formulario-estructural">
                <label>Nombre de la Organización:</label>
                <input type="text" placeholder="Estructura de input">
                <button>Enviar</button>
            </form>
        </article>
        <article class="caja-registro">
            <h2>Registro Voluntarios</h2>
            <form class="formulario-estructural">
                <label>Nombre completo:</label>
                <input type="text" placeholder="Estructura de input">
                <button>Registrar</button>
            </form>
        </article>
    </section>
@endsection