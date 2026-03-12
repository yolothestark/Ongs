<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directorio de ONGs</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    @vite(['resources/css/estructural.css'])
</head>
<body class="text-dark">

    <header class="bg-primary text-white p-3">
        <div class="container d-flex justify-content-between align-items-center">
            
            <div>
                <a href="{{ route('inicio') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo Directorio ONGs" style="height: 45px; object-fit: contain;">
                </a>
            </div>

            <nav>
                <ul class="d-flex list-unstyled mb-0 gap-4 fw-semibold">
                    <li><a href="{{ route('sobre-nosotros') }}" class="text-white text-decoration-none">Sobre nosotros</a></li>
                    <li><a href="{{ route('directorio') }}" class="text-white text-decoration-none">Directorio de ONGs</a></li>
                    <li><a href="{{ route('areas-trabajo') }}" class="text-white text-decoration-none">Áreas de trabajo</a></li>
                </ul>
            </nav>
            <div>
                <button class="btn btn-outline-light">Más ˅</button>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-primary text-white pt-5 pb-3 mt-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-8 d-flex flex-column gap-3">
                    
                    <div>
                        <img src="{{ asset('img/logo.png') }}" alt="Logo Directorio ONGs" style="height: 55px; object-fit: contain;">
                    </div>

                    <ul class="d-flex list-unstyled gap-4 flex-wrap mt-2">
                        <li><a href="{{ route('sobre-nosotros') }}" class="text-white text-decoration-none">Sobre Nosotros</a></li>
                        <li><a href="{{ route('directorio') }}" class="text-white text-decoration-none">Directorio</a></li>
                        <li><a href="{{ route('noticias') }}" class="text-white text-decoration-none">Noticias</a></li>
                        <li><a href="{{ route('participa') }}" class="text-white text-decoration-none">Participa</a></li>
                        <li><a href="{{ route('contacto') }}" class="text-white text-decoration-none">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4 class="h5">Quejas o sugerencias</h4>
                    <div class="d-flex gap-2 mt-2">
                        <input type="text" class="form-control" placeholder="Tu mensaje aquí">
                        <button class="btn btn-outline-light">Enviar</button>
                    </div>
                    <small class="text-light mt-2 d-block">Al suscribirse aceptas nuestra política de privacidad</small>
                </div>
            </div>
            <div class="row border-top border-light pt-3">
                <div class="col-md-6 d-flex gap-4">
                    <a href="{{ route('politica-privacidad') }}" class="text-light text-decoration-none small">Política Privada</a>
                    <a href="{{ route('terminos-servicio') }}" class="text-light text-decoration-none small">Términos de Servicio</a>
                    <a href="{{ route('configuracion-cookies') }}" class="text-light text-decoration-none small">Configuración Cookies</a>
                </div>
                <div class="col-md-6 text-end small text-light">
                    2025 Directorio de ONGs. Todos derechos reservados
                </div>
            </div>
        </div>
    </footer>

</body>
</html>