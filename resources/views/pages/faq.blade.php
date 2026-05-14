@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto mt-10 font-sans p-6 bg-white rounded-xl shadow-sm">
        <h2 class="text-3xl font-bold mb-8 text-center text-blue-900 border-b-4 border-blue-700 pb-3 inline-block mx-auto">
            Preguntas Frecuentes
        </h2>

        {{-- Pregunta 1 --}}
        <div id="contenedor1" class="mb-4 rounded-lg overflow-hidden border-2 border-blue-800 shadow-md clase-pregunta transition-all duration-300">
            <div id="pregunta1" class="cursor-pointer text-lg font-bold bg-white text-blue-900 p-4 hover:bg-blue-50 transition-colors flex justify-between items-center">
                <span>¿Cómo puedo registrar mi ONG en el directorio?</span>
                <svg class="w-6 h-6 text-blue-800 transform transition-transform duration-300" id="icono1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>
            <div id="respuesta1" class="hidden bg-blue-50 p-4 border-t-2 border-blue-800 text-gray-700 font-medium leading-relaxed">
                Para registrar tu ONG, ve a la sección de contacto, completa el formulario con los datos de tu organización y espera la validación del administrador.
            </div>
        </div>

        {{-- Pregunta 2 --}}
        <div id="contenedor2" class="mb-4 rounded-lg overflow-hidden border-2 border-blue-800 shadow-md clase-pregunta transition-all duration-300">
            <div id="pregunta2" class="cursor-pointer text-lg font-bold bg-white text-blue-900 p-4 hover:bg-blue-50 transition-colors flex justify-between items-center">
                <span>¿El registro en la plataforma tiene algún costo?</span>
                <svg class="w-6 h-6 text-blue-800 transform transition-transform duration-300" id="icono2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>
            <div id="respuesta2" class="hidden bg-blue-50 p-4 border-t-2 border-blue-800 text-gray-700 font-medium leading-relaxed">
                No, el registro y la visualización en el directorio son completamente gratuitos para todas las organizaciones.
            </div>
        </div>

        {{-- Pregunta 3 --}}
        <div id="contenedor3" class="mb-4 rounded-lg overflow-hidden border-2 border-blue-800 shadow-md clase-pregunta transition-all duration-300">
            <div id="pregunta3" class="cursor-pointer text-lg font-bold bg-white text-blue-900 p-4 hover:bg-blue-50 transition-colors flex justify-between items-center">
                <span>¿Cómo actualizo la información de mi ONG?</span>
                <svg class="w-6 h-6 text-blue-800 transform transition-transform duration-300" id="icono3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>
            <div id="respuesta3" class="hidden bg-blue-50 p-4 border-t-2 border-blue-800 text-gray-700 font-medium leading-relaxed">
                Por el momento, debes enviar un correo mediante el formulario de contacto solicitando la actualización de tus datos y nosotros lo haremos manualmente.
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            
            // --- EFECTOS MOUSEOVER (Actividad 17) ---
            const contenedores = document.getElementsByClassName('clase-pregunta');

            function resaltarPregunta() {
                const el = document.getElementById(this.id);
                el.classList.add('shadow-xl', 'scale-[1.01]'); // Tailwind classes para efectos
                el.style.borderColor = "#1d4ed8"; // blue-700
            }

            function restaurarPregunta() {
                const el = document.getElementById(this.id);
                el.classList.remove('shadow-xl', 'scale-[1.01]');
                el.style.borderColor = "#1e40af"; // blue-800
            }

            for (let i = 0; i < contenedores.length; i++) {
                contenedores[i].addEventListener('mouseover', resaltarPregunta);
                contenedores[i].addEventListener('mouseout', restaurarPregunta);
            }

            // --- LÓGICA DEL ACORDEÓN ---
            // Función mejorada que además rota la flechita
            function toggle(respuestaId, iconoId) {
                const respuesta = document.getElementById(respuestaId);
                const icono = document.getElementById(iconoId);
                
                // Mostrar/Ocultar respuesta (usando la clase 'hidden' de Tailwind)
                respuesta.classList.toggle("hidden");
                
                // Rotar el icono 180 grados si está abierto
                if (respuesta.classList.contains("hidden")) {
                    icono.classList.remove("rotate-180");
                } else {
                    icono.classList.add("rotate-180");
                }
            }

            // Asignar los eventos click a cada pregunta
            document.getElementById("pregunta1").addEventListener("click", () => toggle("respuesta1", "icono1"));
            document.getElementById("pregunta2").addEventListener("click", () => toggle("respuesta2", "icono2"));
            document.getElementById("pregunta3").addEventListener("click", () => toggle("respuesta3", "icono3"));
        });
    </script>
@endsection