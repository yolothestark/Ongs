<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directorio de ONGs</title>
    @vite(['resources/css/estructural.css'])
</head>
<body>

    <header class="seccion-full-width bg-navy">
        <div class="contenedor-principal layout-header">
            <div class="logo-script"><a href="{{ route('inicio') }}">Logo</a></div>
            <nav class="menu-principal">
                <ul>
                    <li><a href="{{ route('sobre-nosotros') }}">Sobre nosotros</a></li>
                    <li><a href="{{ route('directorio') }}">Directorio de ONGs</a></li>
                    <li><a href="{{ route('areas-trabajo') }}">Áreas de trabajo</a></li>
                </ul>
            </nav>
            <div class="area-acciones-header">
                <button class="btn-outline">Más ˅</button>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="seccion-full-width bg-navy">
        <div class="contenedor-principal grid-footer">
            <div>
                <div class="logo-script" style="margin-bottom: 20px;">Logo</div>
                <nav class="menu-principal">
                    <ul>
                        <li><a href="{{ route('sobre-nosotros') }}">Sobre Nosotros</a></li>
                        <li><a href="{{ route('directorio') }}">Directorio</a></li>
                        <li><a href="{{ route('noticias') }}">Noticias</a></li>
                        <li><a href="{{ route('participa') }}">Participa</a></li>
                        <li><a href="{{ route('contacto') }}">Contacto</a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer-formulario">
                <h4>Quejas o sugerencias</h4>
                <div style="display:flex; gap:10px; margin-top: 10px;">
                    <input type="text" placeholder="Tu mensaje aquí">
                    <button class="btn-outline">Enviar</button>
                </div>
                <small style="color:#ccc;">Al suscribirse aceptas nuestra política de privacidad</small>
            </div>
        </div>
        <div class="contenedor-principal footer-legal" style="padding-top: 20px; padding-bottom: 20px;">
            <div style="display:flex; gap:20px;">
                <a href="{{ route('politica-privacidad') }}">Política Privada</a>
                <a href="{{ route('terminos-servicio') }}">Términos de Servicio</a>
                <a href="{{ route('configuracion-cookies') }}">Configuración Cookies</a>
            </div>
            <p>2025 Directorio de ONGs. Todos derechos reservados</p>
        </div>
    </footer>

</body>
</html>