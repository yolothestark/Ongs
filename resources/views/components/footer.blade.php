<footer class="bg-primary text-white pt-5 pb-3 mt-auto">
    <div class="container-fluid px-md-5">
        <div class="row mb-4">
            <div class="col-md-8 d-flex flex-column gap-3">
                <div>
                    <img src="{{ asset('img/logo.png') }}" alt="Logo Directorio ONGs" style="height: 55px;">
                </div>
                <ul class="d-flex list-unstyled gap-4 flex-wrap mt-2 fw-medium">
                    <li><a href="{{ route('sobre-nosotros') }}" class="text-white text-decoration-none">Sobre Nosotros</a></li>
                    <li><a href="{{ route('directorio') }}" class="text-white text-decoration-none">Directorio</a></li>
                    <li><a href="{{ route('noticias') }}" class="text-white text-decoration-none">Noticias</a></li>
                    <li><a href="{{ route('participa') }}" class="text-white text-decoration-none">Participa</a></li>
                    <li><a href="{{ route('contacto') }}" class="text-white text-decoration-none">Contacto</a></li>
                </ul>
            </div>

            <div class="col-md-4">
                <h4 class="h5 fw-bold">Quejas o sugerencias</h4>
                <div class="d-flex gap-2 mt-2">
                    <input type="text" class="form-control" placeholder="Tu mensaje aquí">
                    <button class="btn btn-secondary">Enviar</button>
                </div>
                <small class="text-light mt-2 d-block opacity-75">
                    Al suscribirse aceptas nuestra política de privacidad
                </small>
            </div>
        </div>

        <div class="row border-top border-light pt-3 opacity-75">
            <div class="col-md-6 d-flex gap-4">
                <a href="{{ route('politica-privacidad') }}" class="text-white text-decoration-none small">Política Privada</a>
                <a href="{{ route('terminos-servicio') }}" class="text-white text-decoration-none small">Términos de Servicio</a>
                <a href="{{ route('configuracion-cookies') }}" class="text-white text-decoration-none small">Configuración Cookies</a>
            </div>
            <div class="col-md-6 text-md-end small text-white mt-3 mt-md-0">
                2025 Directorio de ONGs. Todos derechos reservados.
            </div>
        </div>
    </div>
</footer>