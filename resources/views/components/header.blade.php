<header class="bg-primary text-white p-3 shadow-sm">
    <div class="container-fluid d-flex align-items-center justify-content-between px-md-5">
        
        <div>
            <a href="{{ route('inicio') }}">
                <img src="{{ asset('img/logo.png') }}" alt="Logo Directorio ONGs" style="height: 45px;">
            </a>
        </div>

        @include('components.navbar')

        <div class="dropdown">
            <button class="btn btn-outline-light dropdown-toggle px-3 fw-bold" type="button" data-bs-toggle="dropdown">
                Más
            </button>
            <ul class="dropdown-menu dropdown-menu-end shadow">
                <li><a class="dropdown-item" href="{{ route('contacto') }}">Contacto</a></li>
                <li><a class="dropdown-item" href="{{ route('participa') }}">Participa</a></li>
                <li><a class="dropdown-item" href="{{ route('noticias') }}">Noticias</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ route('politica-privacidad') }}">Política de privacidad</a></li>
            </ul>
        </div>

    </div>
</header>