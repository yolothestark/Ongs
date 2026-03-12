@extends('layouts.app')

@section('content')
    <section class="container text-center py-5 mt-4">
        <h1 class="display-4 fw-bold mb-3">Participa con nosotros</h1>
        <p class="lead text-secondary mb-5">Registra tu ONG o únete a la red como voluntario.</p>

        <div class="row g-5 text-start mt-2">
            <article class="col-md-6">
                <div class="card border-0 shadow-sm p-5 rounded-4 h-100">
                    <h2 class="h3 fw-bold mb-4">Registrar ONG</h2>
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-lg" placeholder="Nombre de la Organización">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control form-control-lg" placeholder="Área principal (Ej. Salud)">
                        </div>
                        <button type="button" class="btn btn-info text-white btn-lg w-100 fw-bold">Enviar Solicitud</button>
                    </form>
                </div>
            </article>

            <article class="col-md-6">
                <div class="card bg-secondary border-0 p-5 rounded-4 h-100">
                    <h2 class="h3 fw-bold mb-4">Registro Voluntarios</h2>
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-lg border-0" placeholder="Nombre completo">
                        </div>
                        <div class="mb-4">
                            <input type="email" class="form-control form-control-lg border-0" placeholder="Correo electrónico">
                        </div>
                        <button type="button" class="btn btn-primary btn-lg w-100 fw-bold">Crear cuenta</button>
                    </form>
                </div>
            </article>
        </div>
    </section>
@endsection