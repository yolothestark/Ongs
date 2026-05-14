<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directorio de ONGs</title>
    
    @vite([
        'resources/css/app.css', 
        'resources/css/estructural.css', 
        'resources/js/app.js'
    ])
</head>

<body class="flex flex-col min-h-screen text-gray-800 font-sans">

    <header class="bg-blue-900 text-white p-4 shadow-md">
        <div class="container mx-auto flex items-center justify-between px-6">
            
            <div>
                <a href="{{ route('inicio') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo Directorio ONGs" class="h-12">
                </a>
            </div>

            <nav class="hidden md:block">
                <ul class="flex space-x-6 font-semibold">
                    <li><a href="{{ route('sobre-nosotros') }}" class="hover:text-blue-300 transition">Sobre nosotros</a></li>
                    <li><a href="{{ route('directorio') }}" class="hover:text-blue-300 transition">Directorio de ONGs</a></li>
                    <li><a href="{{ route('areas-trabajo') }}" class="hover:text-blue-300 transition">Áreas de trabajo</a></li>
                    <li><a href="{{ route('faq') }}" class="hover:text-blue-300 transition">Preguntas Frecuentes</a></li>
                </ul>
            </nav>

            <div class="relative inline-block text-left" id="dropdown-menu-container">
                <button type="button" id="dropdown-button" class="inline-flex justify-center w-full rounded-md border border-white px-4 py-2 bg-blue-800 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none transition">
                    Más
                </button>

                <div id="dropdown-content" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden z-50">
                    <div class="py-1" role="menu">
                        <a href="{{ route('contacto') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Contacto</a>
                        <a href="{{ route('participa') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Participa</a>
                        <a href="{{ route('noticias') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Noticias</a>
                        <a href="{{ route('politica-privacidad') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Política de privacidad</a>
                    </div>
                </div>
            </div>

        </div>
    </header>

    <main class="flex-grow bg-gray-50">
        @yield('content')
    </main>

    <footer class="bg-blue-900 text-white pt-10 pb-6 w-full">
        <div class="container mx-auto px-6">

            <div class="flex flex-wrap mb-8">
                <div class="w-full md:w-2/3 flex flex-col gap-4 mb-6 md:mb-0">
                    <div>
                        <img src="{{ asset('img/logo.png') }}" alt="Logo Directorio ONGs" class="h-14">
                    </div>
                    <ul class="flex flex-wrap gap-6 mt-4 font-medium">
                        <li><a href="{{ route('sobre-nosotros') }}" class="hover:text-blue-300 transition">Sobre Nosotros</a></li>
                        <li><a href="{{ route('directorio') }}" class="hover:text-blue-300 transition">Directorio</a></li>
                        <li><a href="{{ route('noticias') }}" class="hover:text-blue-300 transition">Noticias</a></li>
                        <li><a href="{{ route('participa') }}" class="hover:text-blue-300 transition">Participa</a></li>
                        <li><a href="{{ route('contacto') }}" class="hover:text-blue-300 transition">Contacto</a></li>
                    </ul>
                </div>

                <div class="w-full md:w-1/3">
                    <h4 class="text-lg font-bold mb-3">Quejas o sugerencias</h4>
                    <div class="flex gap-2">
                        <input type="text" class="w-full px-3 py-2 rounded text-gray-800 focus:outline-none" placeholder="Tu mensaje aquí">
                        <button class="bg-blue-700 hover:bg-blue-600 px-4 py-2 rounded text-white font-medium transition">Enviar</button>
                    </div>
                    <small class="text-blue-200 mt-2 block">
                        Al suscribirse aceptas nuestra política de privacidad
                    </small>
                </div>
            </div>

            <div class="flex flex-wrap justify-between items-center border-t border-blue-700 pt-6 mt-4 text-sm text-blue-300">
                <div class="flex gap-6 mb-4 md:mb-0">
                    <a href="{{ route('politica-privacidad') }}" class="hover:text-white transition">Política Privada</a>
                    <a href="{{ route('terminos-servicio') }}" class="hover:text-white transition">Términos de Servicio</a>
                    <a href="{{ route('configuracion-cookies') }}" class="hover:text-white transition">Configuración Cookies</a>
                </div>
                <div>
                    2025 Directorio de ONGs. Todos derechos reservados.
                </div>
            </div>

        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const button = document.getElementById('dropdown-button');
            const menu = document.getElementById('dropdown-content');

            button.addEventListener('click', function(event) {
                event.stopPropagation();
                menu.classList.toggle('hidden');
            });

            // Cierra el menú si haces clic en cualquier otra parte
            document.addEventListener('click', function() {
                if (!menu.classList.contains('hidden')) {
                    menu.classList.add('hidden');
                }
            });
        });
    </script>

</body>
</html>