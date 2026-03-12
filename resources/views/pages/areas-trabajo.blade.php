@extends('layouts.app')

@section('content')
    <section class="container text-center py-5 mt-4">
        <h1 class="display-4 fw-bold mb-3">Áreas de Trabajo</h1>
        <p class="lead text-secondary mb-5">Explora las diferentes causas que apoyamos estructuralmente.</p>
        
        <div class="row g-4 text-start mt-4">
            <article class="col-md-4">
                <div class="card bg-primary text-white border-0 rounded-4 p-4 h-100">
                    <div class="card-body">
                        <h2 class="h3 fw-bold mb-3">Salud</h2>
                        <p class="text-light opacity-75">Organizaciones enfocadas en bienestar y salud pública.</p>
                    </div>
                </div>
            </article>
            <article class="col-md-4">
                <div class="card bg-secondary text-dark border-0 rounded-4 p-4 h-100">
                    <div class="card-body">
                        <h2 class="h3 fw-bold mb-3">Derechos Humanos</h2>
                        <p>Defensa y promoción de garantías individuales y desarrollo social.</p>
                    </div>
                </div>
            </article>
            <article class="col-md-4">
                <div class="card bg-light text-dark border-0 rounded-4 p-4 h-100">
                    <div class="card-body">
                        <h2 class="h3 fw-bold mb-3">Medio Ambiente</h2>
                        <p class="text-secondary">Protección de ecosistemas, reforestación y recursos naturales.</p>
                    </div>
                </div>
            </article>
        </div>
    </section>
@endsection