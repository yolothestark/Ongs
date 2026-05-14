@extends('layouts.app')

@section('content')
    <div class="container mt-5" style="max-width: 800px;">
        <h2 class="text-center text-primary fw-bold mb-5 border-bottom border-primary pb-3 d-inline-block w-100">
            Preguntas Frecuentes
        </h2>

        {{-- Pregunta 1 --}}
        <div id="contenedor1" class="card border-primary mb-4 shadow-sm clase-pregunta" style="transition: all 0.3s ease;">
            <div id="pregunta1" class="card-header bg-white text-primary fw-bold fs-5" style="cursor: pointer;">
                ¿Cómo puedo registrar mi ONG en el directorio?
            </div>
            <div id="respuesta1" class="card-body bg-light text-dark d-none">
                Para registrar tu ONG, ve a la sección de contacto, completa el formulario con los datos de tu organización y espera la validación del administrador.
            </div>
        </div>

        {{-- Pregunta 2 --}}
        <div id="contenedor2" class="card border-primary mb-4 shadow-sm clase-pregunta" style="transition: all 0.3s ease;">
            <div id="pregunta2" class="card-header bg-white text-primary fw-bold fs-5" style="cursor: pointer;">
                ¿El registro en la plataforma tiene algún costo?
            </div>
            <div id="respuesta2" class="card-body bg-light text-dark d-none">
                No, el registro y la visualización en el directorio son completamente gratuitos para todas las organizaciones.
            </div>
        </div>

        {{-- Pregunta 3 --}}
        <div id="contenedor3" class="card border-primary mb-4 shadow-sm clase-pregunta" style="transition: all 0.3s ease;">
            <div id="pregunta3" class="card-header bg-white text-primary fw-bold fs-5" style="cursor: pointer;">
                ¿Cómo actualizo la información de mi ONG?
            </div>
            <div id="respuesta3" class="card-body bg-light text-dark d-none">
                Por el momento, debes enviar un correo mediante el formulario de contacto solicitando la actualización de tus datos y nosotros lo haremos manualmente.
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // --- REQUISITOS ACTIVIDAD 17 (Efectos Hover) ---
            const contenedores = document.getElementsByClassName('clase-pregunta');

            function resaltarPregunta() {
                const el = document.getElementById(this.id);
                el.classList.add('shadow-lg'); 
                el.style.transform = "scale(1.02)"; 
                el.style.borderColor = "#0a58ca"; 
            }

            function restaurarPregunta() {
                const el = document.getElementById(this.id);
                el.classList.remove('shadow-lg'); 
                el.style.transform = "scale(1)"; 
                el.style.borderColor = ""; 
            }

            for (let i = 0; i < contenedores.length; i++) {
                contenedores[i].addEventListener('mouseover', resaltarPregunta);
                contenedores[i].addEventListener('mouseout', restaurarPregunta);
            }

            // --- LÓGICA DE ACORDEÓN (Click usando clases de Bootstrap) ---
            function toggle(respuestaId) {
                const respuesta = document.getElementById(respuestaId);
                // En Bootstrap usamos d-none para ocultar
                respuesta.classList.toggle("d-none");
            }

            document.getElementById("pregunta1").addEventListener("click", () => toggle("respuesta1"));
            document.getElementById("pregunta2").addEventListener("click", () => toggle("respuesta2"));
            document.getElementById("pregunta3").addEventListener("click", () => toggle("respuesta3"));
        });
    </script>
@endsection