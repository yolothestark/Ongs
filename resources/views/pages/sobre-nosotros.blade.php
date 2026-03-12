@extends('layouts.app')

@section('content')
    <section class="container text-center py-5 mt-4">
        <h1 class="display-4 fw-bold mb-3">Sobre Nosotros</h1>
        <p class="lead text-secondary">Conoce nuestra historia y el equipo detrás del Directorio de ONGs.</p>
    </section>

    <div class="bg-secondary text-dark py-5">
        <section class="container py-4">
            <div class="row align-items-start g-5">
                <article class="col-md-6">
                    <h2 class="display-6 fw-bold">Nuestra Misión</h2>
                    <p class="fs-5">Contenido estructural de la misión. Facilitar el acceso a información relevante sobre organizaciones no gubernamentales.</p>
                </article>
                <article class="col-md-6">
                    <h2 class="display-6 fw-bold">Nuestra Visión</h2>
                    <p class="fs-5">Contenido estructural de la visión. Promover la participación social y el apoyo a causas comunitarias desde tu región.</p>
                </article>
            </div>
        </section>
    </div>

    <section class="container text-center py-5 mt-5">
        <h2 class="h1 fw-bold mb-5">Nuestro Equipo</h2>
        <div class="row g-4 text-start justify-content-center">
            <article class="col-md-5">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                    <img src="{{ asset('img/equipo1.jpg') }}" alt="Foto perfil" class="card-img-top" style="height:300px; object-fit:cover; background:#e2e8f0;">
                    <div class="card-body p-4">
                        <span class="text-uppercase fw-bold text-secondary small">Director</span>
                        <h3 class="h4 fw-bold mt-2">Nombre Integrante 1</h3>
                        <p class="text-secondary mb-0">Puesto estructural</p>
                    </div>
                </div>
            </article>
            <article class="col-md-5">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                    <img src="{{ asset('img/equipo2.jpg') }}" alt="Foto perfil" class="card-img-top" style="height:300px; object-fit:cover; background:#e2e8f0;">
                    <div class="card-body p-4">
                        <span class="text-uppercase fw-bold text-secondary small">Desarrollo</span>
                        <h3 class="h4 fw-bold mt-2">Nombre Integrante 2</h3>
                        <p class="text-secondary mb-0">Puesto estructural</p>
                    </div>
                </div>
            </article>
        </div>
    </section>
@endsection