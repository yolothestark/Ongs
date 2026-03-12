@extends('layouts.app')

@section('content')
    <div class="bg-primary text-white py-5 text-center">
        <div class="container py-4">
            <h1 class="display-4 fw-bold mb-3">Contacto</h1>
            <p class="lead text-light opacity-75 mb-0">¿Tienes dudas? Escríbenos y te responderemos pronto.</p>
        </div>
    </div>

    <section class="container py-5 my-4">
        <div class="row g-5 align-items-center">
            <article class="col-md-5">
                <h2 class="display-6 fw-bold mb-4">Información Directa</h2>
                <p class="fs-5 mb-3"><strong>Email:</strong> hola@directorioongs.com</p>
                <p class="fs-5 mb-3"><strong>Teléfono:</strong> +52 33 1234 5678</p>
                <p class="fs-5"><strong>Oficina:</strong> CUTonalá, Jalisco.</p>
            </article>

            <article class="col-md-7">
                <div class="card border-0 shadow-sm p-5 rounded-4">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-lg" placeholder="Tu Nombre">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-lg" placeholder="Asunto">
                        </div>
                        <div class="mb-4">
                            <textarea class="form-control form-control-lg" rows="5" placeholder="Escribe tu mensaje aquí..."></textarea>
                        </div>
                        <button type="button" class="btn btn-info text-white btn-lg fw-bold">Enviar Mensaje</button>
                    </form>
                </div>
            </article>
        </div>
    </section>
@endsection