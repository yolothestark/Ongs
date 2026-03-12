@extends('layouts.app')

@section('content')
    <section class="container py-5 mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="display-5 fw-bold mb-2">Configuración de Cookies</h1>
                <p class="text-secondary mb-5">Administra tus preferencias de rastreo estructural.</p>

                <div class="card border-0 shadow-sm p-5 rounded-4">
                    <div class="form-check mb-4 pb-4 border-bottom">
                        <input class="form-check-input fs-4" type="checkbox" id="cookieEsen" checked disabled>
                        <label class="form-check-label ms-2" for="cookieEsen">
                            <span class="fw-bold fs-5">Cookies Esenciales (Obligatorias)</span>
                            <span class="d-block text-secondary mt-1">Necesarias para el funcionamiento básico del sitio. No pueden ser desactivadas.</span>
                        </label>
                    </div>
                    
                    <div class="form-check mb-5">
                        <input class="form-check-input fs-4" type="checkbox" id="cookieAna">
                        <label class="form-check-label ms-2" for="cookieAna">
                            <span class="fw-bold fs-5">Cookies Analíticas</span>
                            <span class="d-block text-secondary mt-1">Nos ayudan a medir el tráfico y uso de la plataforma para mejorar la experiencia de las ONGs.</span>
                        </label>
                    </div>

                    <button type="button" class="btn btn-info text-white btn-lg w-100 fw-bold">Guardar Preferencias</button>
                </div>
            </div>
        </div>
    </section>
@endsection