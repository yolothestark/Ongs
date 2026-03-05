<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directorio de ONGs - Maquetado Estructural</title>
    @vite(['resources/css/estructural.css'])
    </head>
<body>

    <header class="area-header">
        <div class="contenedor-principal layout-header">
            <div class="logo-placeholder"><a href="{{ route('inicio') }}" style="text-decoration: none; color: inherit;">[Logo]</a></div>
            <nav class="menu-principal">
                <ul>
                    <li><a href="{{ route('sobre-nosotros') }}">Sobre nosotros</a></li>
                    <li><a href="{{ route('directorio') }}">Directorio de ONGs</a></li>
                    <li><a href="{{ route('areas-trabajo') }}">Áreas de trabajo</a></li>
                </ul>
            </nav>
            <div class="area-acciones-header">
                <button>Más</button>
            </div>
        </div>
    </header>

    <main class="contenido-central">
        @yield('content')
    </main>

    <footer class="pie-pagina">
        <div class="contenedor-principal grid-footer">
            <div class="footer-logo">[Logo]</div>
            <nav class="footer-enlaces">
                <ul>
                    <li><a href="{{ route('sobre-nosotros') }}">Sobre Nosotros</a></li>
                    <li><a href="{{ route('directorio') }}">Directorio</a></li>
                    <li><a href="{{ route('noticias') }}">Noticias</a></li>
                    <li><a href="{{ route('participa') }}">Participa</a></li>
                    <li><a href="{{ route('contacto') }}">Contacto</a></li>
                </ul>
            </nav>
            <div class="footer-formulario">
                <h4>Quejas o sugerencias</h4>
                <textarea placeholder="Tu mensaje aqui"></textarea>
                <button>Enviar</button>
                <small>Al suscribirse aceptas nuestra política de privacidad</small>
            </div>
        </div>
        <div class="contenedor-principal footer-legal">
            <div class="legal-enlaces">
                <a href="{{ route('politica-privacidad') }}">Política Privada</a>
                <a href="{{ route('terminos-servicio') }}">Términos de Servicio</a>
                <a href="{{ route('configuracion-cookies') }}">Configuración Cookies</a>
            </div>
            <p>2025 Directorio de ONGs. Todos derechos reservados</p>
        </div>
    </footer>

</body>
</html>