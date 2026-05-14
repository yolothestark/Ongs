@extends('layouts.app')


@section('content')
    <div class="max-w-3xl mx-auto mt-10 font-sans p-4">
        <h2 class="text-3xl font-bold mb-8 text-center text-blue-900 border-b-4 border-blue-700 pb-3">
            Preguntas Frecuentes
        </h2>

        {{-- Agregamos la clase "clase-pregunta" para el enlace por ClassName --}}
        <div id="contenedor1" class="mb-4 rounded-lg overflow-hidden border-2 border-blue-800 shadow-md clase-pregunta" style="transition: all 0.3s ease;">
            <div id="pregunta1" class="cursor-pointer text-lg font-bold bg-white text-blue-900 p-4 transition-colors">
                ¿Cómo puedo registrar mi ONG en el directorio?
            </div>
            <div id="respuesta1" class="hidden bg-blue-50 p-4 border-t-2 border-blue-800 text-blue-900 font-medium">
                Para registrar tu ONG, ve a la sección de contacto, completa el formulario con los datos de tu organización y espera la validación del administrador.
            </div>
        </div>

        <div id="contenedor2" class="mb-4 rounded-lg overflow-hidden border-2 border-blue-800 shadow-md clase-pregunta" style="transition: all 0.3s ease;">
            <div id="pregunta2" class="cursor-pointer text-lg font-bold bg-white text-blue-900 p-4 transition-colors">
                ¿El registro en la plataforma tiene algún costo?
            </div>
            <div id="respuesta2" class="hidden bg-blue-50 p-4 border-t-2 border-blue-800 text-blue-900 font-medium">
                No, el registro y la visualización en el directorio son completamente gratuitos para todas las organizaciones.
            </div>
        </div>

        <div id="contenedor3" class="mb-4 rounded-lg overflow-hidden border-2 border-blue-800 shadow-md clase-pregunta" style="transition: all 0.3s ease;">
            <div id="pregunta3" class="cursor-pointer text-lg font-bold bg-white text-blue-900 p-4 transition-colors">
                ¿Cómo actualizo la información de mi ONG?
            </div>
            <div id="respuesta3" class="hidden bg-blue-50 p-4 border-t-2 border-blue-800 text-blue-900 font-medium">
                Por el momento, debes enviar un correo mediante el formulario de contacto solicitando la actualización de tus datos y nosotros lo haremos manualmente.
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // --- REQUISITOS ACTIVIDAD 17 ---

            // 1. Enlace a divisiones mediante ClassName
            const contenedores = document.getElementsByClassName('clase-pregunta');

            // 2. Funciones explícitas para MouseOver (Efectos)
            function resaltarPregunta() {
                // Enlace mediante ById (usando el ID del elemento que dispara el evento)
                const el = document.getElementById(this.id);
                
                // Aplicamos 3 efectos distintos con classList y style
                el.classList.add('shadow-2xl'); // 1. Efecto Sombra profunda
                el.style.transform = "scale(1.02) rotate(1deg)"; // 2. Escala y Rotación sutil
                el.style.borderColor = "#1d4ed8"; // 3. Cambio de color de borde
            }

            function restaurarPregunta() {
                const el = document.getElementById(this.id);
                
                el.classList.remove('shadow-2xl'); // classList.remove
                el.style.transform = "scale(1) rotate(0deg)";
                el.style.borderColor = "#1e3a8a"; // Volver al color original
            }

            // 3. Asignar eventos mediante addEventListener y bucle
            for (let i = 0; i < contenedores.length; i++) {
                contenedores[i].addEventListener('mouseover', resaltarPregunta);
                contenedores[i].addEventListener('mouseout', restaurarPregunta);
            }

            // --- LÓGICA ORIGINAL DE ACORDEÓN (CLICK) ---
            let p1 = document.getElementById("pregunta1");
            let r1 = document.getElementById("respuesta1");
            let p2 = document.getElementById("pregunta2");
            let r2 = document.getElementById("respuesta2");
            let p3 = document.getElementById("pregunta3");
            let r3 = document.getElementById("respuesta3");

            function toggle(respuesta) {
                respuesta.classList.toggle("hidden");
            }

            p1.addEventListener("click", () => toggle(r1));
            p2.addEventListener("click", () => toggle(r2));
            p3.addEventListener("click", () => toggle(r3));
        });
    </script>
@endsection