@extends('layouts.app')

@section('content')
    <div class="bg-light py-5">
        <section class="container">
            <h1 class="display-5 fw-bold mb-0">Directorio de Organizaciones</h1>
        </section>
    </div>

    <div class="container py-5 mt-4">
        <div class="row g-5">
            <aside class="col-md-3">
                <div class="card border-0 shadow-sm p-4 rounded-4">
                    <h2 class="h4 fw-bold mb-4">Filtros</h2>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="zonaNorte">
                        <label class="form-check-label fw-semibold" for="zonaNorte">Zona Norte</label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="zonaSur">
                        <label class="form-check-label fw-semibold" for="zonaSur">Zona Sur</label>
                    </div>
                    <hr class="text-secondary">
                    <div class="form-check mb-2 mt-4">
                        <input class="form-check-input" type="checkbox" id="catEdu">
                        <label class="form-check-label fw-semibold" for="catEdu">Educación</label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="catEco">
                        <label class="form-check-label fw-semibold" for="catEco">Ecología</label>
                    </div>
                    <button class="btn btn-info text-white w-100 fw-bold">Aplicar Filtros</button>
                </div>
            </aside>

            <section class="col-md-9">
                <div class="row g-4">
                    <article class="col-md-6">
                        <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                            <div style="height:200px; background:#e2e8f0;"></div>
                            <div class="card-body p-4">
                                <h3 class="h4 fw-bold">Nombre de ONG 1</h3>
                                <p class="text-secondary">Descripción estructural de la organización y su impacto social.</p>
                                <a href="#" class="text-info fw-bold text-decoration-none mt-2 d-inline-block">Ver perfil completo ></a>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-6">
                        <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                            <div style="height:200px; background:#e2e8f0;"></div>
                            <div class="card-body p-4">
                                <h3 class="h4 fw-bold">Nombre de ONG 2</h3>
                                <p class="text-secondary">Descripción estructural de la organización y su impacto social.</p>
                                <a href="#" class="text-info fw-bold text-decoration-none mt-2 d-inline-block">Ver perfil completo ></a>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </div>
@endsection