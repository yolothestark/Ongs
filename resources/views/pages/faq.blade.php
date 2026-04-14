@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto mt-10 font-sans p-4">
        <h2 class="text-3xl font-bold mb-8 text-center text-blue-900 border-b-4 border-blue-700 pb-3">
            Preguntas Frecuentes
        </h2>

        <div class="mb-4 rounded-lg overflow-hidden border-2 border-blue-800 shadow-md">
            <div id="pregunta1" class="cursor-pointer text-lg font-bold bg-white text-blue-900 p-4 hover:bg-blue-100 transition-colors">
                ¿Cómo puedo registrar mi ONG en el directorio?
            </div>
            <div id="respuesta1" class="hidden bg-blue-50 p-4 border-t-2 border-blue-800 text-blue-900 font-medium">
                Para registrar tu ONG, ve a la sección de contacto, completa el formulario con los datos de tu organización y espera la validación del administrador.
            </div>
        </div>

        <div class="mb-4 rounded-lg overflow-hidden border-2 border-blue-800 shadow-md">
            <div id="pregunta2" class="cursor-pointer text-lg font-bold bg-white text-blue-900 p-4 hover:bg-blue-100 transition-colors">
                ¿El registro en la plataforma tiene algún costo?
            </div>
            <div id="respuesta2" class="hidden bg-blue-50 p-4 border-t-2 border-blue-800 text-blue-900 font-medium">
                No, el registro y la visualización en el directorio son completamente gratuitos para todas las organizaciones.
            </div>
        </div>

        <div class="mb-4 rounded-lg overflow-hidden border-2 border-blue-800 shadow-md">
            <div id="pregunta3" class="cursor-pointer text-lg font-bold bg-white text-blue-900 p-4 hover:bg-blue-100 transition-colors">
                ¿Cómo actualizo la información de mi ONG?
            </div>
            <div id="respuesta3" class="hidden bg-blue-50 p-4 border-t-2 border-blue-800 text-blue-900 font-medium">
                Por el momento, debes enviar un correo mediante el formulario de contacto solicitando la actualización de tus datos y nosotros lo haremos manualmente.
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // 1. Obtener los elementos mediante getElementById
            let p1 = document.getElementById("pregunta1");
            let r1 = document.getElementById("respuesta1");

            let p2 = document.getElementById("pregunta2");
            let r2 = document.getElementById("respuesta2");

            let p3 = document.getElementById("pregunta3");
            let r3 = document.getElementById("respuesta3");

            // 2. Función genérica para mostrar/ocultar usando classList
            function toggle(respuesta) {
                respuesta.classList.toggle("hidden");
            }

            // 3. Asignar eventos independientes con addEventListener
            p1.addEventListener("click", function() {
                toggle(r1);
            });

            p2.addEventListener("click", function() {
                toggle(r2);
            });

            p3.addEventListener("click", function() {
                toggle(r3);
            });
        });
    </script>

@endsection