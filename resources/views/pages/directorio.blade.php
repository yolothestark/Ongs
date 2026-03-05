@extends('layouts.app')

@section('content')
    <div class="layout-directorio contenedor-principal">
        <aside class="barra-lateral-filtros">
            <h2>Filtros</h2>
            <form class="formulario-estructural">
                <fieldset>
                    <legend>Ubicación</legend>
                    <input type="checkbox" id="loc1"><label for="loc1">Norte</label><br>
                    <input type="checkbox" id="loc2"><label for="loc2">Sur</label>
                </fieldset>
                <button>Aplicar Filtros</button>
            </form>
        </aside>

        <section class="seccion-lista-ongs">
            <h1>Directorio de Organizaciones</h1>
            <div class="grid-dos-columnas">
                <article class="tarjeta-ong">
                    <div class="placeholder-img-pequena">[Logo ONG]</div>
                    <h3>Nombre de ONG 1</h3>
                    <p>Descripción estructural de la ONG...</p>
                </article>
                <article class="tarjeta-ong">
                    <div class="placeholder-img-pequena">[Logo ONG]</div>
                    <h3>Nombre de ONG 2</h3>
                    <p>Descripción estructural de la ONG...</p>
                </article>
            </div>
        </section>
    </div>
@endsection