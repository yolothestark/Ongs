@extends('layouts.app')

@section('content')
    <section class="seccion-preferencias contenedor-principal">
        <h1>Configuración de Cookies</h1>
        <form class="formulario-estructural">
            <div class="opcion-cookie">
                <input type="checkbox" id="esenciales" checked disabled>
                <label for="esenciales"><strong>Cookies Esenciales (Obligatorias)</strong></label>
                <p>Necesarias para el funcionamiento básico del sitio (texto de prueba).</p>
            </div>
            <button>Guardar Preferencias</button>
        </form>
    </section>
@endsection