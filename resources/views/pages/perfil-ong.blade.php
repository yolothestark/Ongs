@extends('layouts.app')

@section('content')
<div class="container py-5 mt-4">
    <a href="{{ route('directorio') }}" class="btn btn-outline-dark mb-4 fw-bold">
        <i class="bi bi-arrow-left"></i> Volver al directorio
    </a>

    <div class="row g-5">
        <div class="col-lg-8">
            <div class="d-flex gap-2 mb-3">
                <span class="badge {{ $ong['categoria'] == 'Tecnología' ? 'bg-dark' : ($ong['categoria'] == 'Ecología' ? 'bg-success' : 'bg-warning text-dark') }}">
                    {{ $ong['categoria'] }}
                </span>
                <span class="badge bg-secondary opacity-75">
                    {{ $ong['alcance'] }}
                </span>
                <span class="badge border text-dark">
                    {{ $ong['tipo'] }}
                </span>
            </div>
            
            <h1 class="display-5 fw-bold mb-3">{{ $ong['nombre'] }}</h1>
            <h2 class="h4 text-secondary mb-5">{{ $ong['descripcion_corta'] }}</h2>
            
            <h3 class="h4 fw-bold mb-3">Nuestra Labor</h3>
            <p class="fs-5 text-secondary lh-lg mb-5">
                {{ $ong['descripcion_larga'] }}
            </p>
        </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 bg-white p-4 sticky-top" style="top: 100px;">
                <h4 class="fw-bold mb-4 border-bottom pb-3">Información de Contacto</h4>
                
                <div class="mb-4">
                    <span class="text-secondary d-block small text-uppercase fw-bold mb-1">Teléfono</span>
                    <span class="fs-5 fw-medium">{{ $ong['telefono'] }}</span>
                </div>
                
                <div class="mb-4">
                    <span class="text-secondary d-block small text-uppercase fw-bold mb-1">Correo Electrónico</span>
                    <a href="mailto:{{ $ong['email'] }}" class="fs-6 text-dark text-decoration-none fw-medium">{{ $ong['email'] }}</a>
                </div>
                
                <div class="mb-4">
                    <span class="text-secondary d-block small text-uppercase fw-bold mb-1">Ubicación principal</span>
                    <span class="fs-6 text-dark">{{ $ong['direccion'] }}</span>
                </div>
                
                <div class="mb-4">
                    <span class="text-secondary d-block small text-uppercase fw-bold mb-1">Sitio Web</span>
                    <a href="#" class="text-primary text-decoration-none fw-bold">{{ $ong['sitio_web'] }}</a>
                </div>

                <button class="btn btn-dark w-100 py-3 fw-bold mt-2 shadow-sm">Contactar ahora</button>
            </div>
        </div>
    </div>
</div>
@endsection