@extends('layouts.app')

@section('content')
    <div class="container py-5 mt-4">
        <div class="row g-5 align-items-start">
            <section class="col-md-8">
                <h1 class="display-5 fw-bold mb-5">Noticias del Sector</h1>
                
                <article class="card border-0 shadow-sm rounded-4 overflow-hidden mb-5">
                    <div style="height:350px; background:#e2e8f0;"></div>
                    <div class="card-body p-5">
                        <span class="text-info fw-bold small text-uppercase">15 de Octubre, 2025</span>
                        <h2 class="display-6 fw-bold mt-2 mb-3">Título de la noticia principal</h2>
                        <p class="fs-5 text-secondary mb-4">Resumen del artículo de prueba estructural. Avances en el desarrollo del tercer sector y sus aportaciones.</p>
                        <button class="btn btn-outline-dark fw-bold px-4">Leer más</button>
                    </div>
                </article>
            </section>

            <aside class="col-md-4">
                <div class="bg-light p-5 rounded-4">
                    <h3 class="h4 fw-bold mb-4">Categorías</h3>
                    <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                        <li><a href="#" class="text-dark fw-semibold text-decoration-none">Eventos de la comunidad</a></li>
                        <li><a href="#" class="text-dark fw-semibold text-decoration-none">Oportunidades de Voluntariado</a></li>
                        <li><a href="#" class="text-dark fw-semibold text-decoration-none">Reportes de impacto social</a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
@endsection