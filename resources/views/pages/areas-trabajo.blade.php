@extends('layouts.app')

@section('content')
<div class="container py-5 mt-4">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold mb-3">Áreas de Trabajo</h1>
        <p class="fs-5 text-secondary">Explora las diferentes causas que apoyamos estructuralmente.</p>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card h-100 bg-primary text-white border-0 rounded-4 text-center p-4 shadow-sm btn-area" style="cursor: pointer;" data-area="Tecnología">
                <div class="card-body">
                    <h2 class="fw-bold mb-3">Tecnología</h2>
                    <p class="mb-0 text-light opacity-75">Reducción de la brecha digital y capacitación tecnológica para todos.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 bg-secondary text-dark border-0 rounded-4 text-center p-4 shadow-sm btn-area" style="cursor: pointer;" data-area="Ecología">
                <div class="card-body">
                    <h2 class="fw-bold mb-3">Ecología</h2>
                    <p class="mb-0 opacity-75">Protección de ecosistemas, reforestación y conservación de recursos.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 bg-white text-dark border rounded-4 text-center p-4 shadow-sm btn-area" style="cursor: pointer;" data-area="Educación">
                <div class="card-body">
                    <h2 class="fw-bold mb-3">Educación</h2>
                    <p class="mb-0 text-secondary">Fomento al aprendizaje, regularización y acceso a materiales escolares.</p>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5 opacity-25">

    <div id="seccion-resultados" class="d-none">
        <div class="mb-4">
            <h3 id="titulo-area" class="display-6 fw-bold text-primary mb-2">Título</h3>
            <p id="descripcion-area" class="text-secondary fs-5">Descripción detallada de lo que hace esta área...</p>
        </div>

        <div class="row g-4" id="contenedor-ongs-areas">
            @foreach($ongs as $ong)
                <div class="col-md-4 tarjeta-ong cat-{{ $ong['categoria'] }} cat-EcoTech" style="display: none;">
                    <div class="card h-100 shadow-sm border border-light rounded-4 overflow-hidden">
                        <div class="card-body p-4">
                            <span class="badge bg-light text-dark border mb-3">{{ $ong['categoria'] }}</span>
                            <h5 class="fw-bold">{{ $ong['nombre'] }}</h5>
                            <p class="text-sm text-muted mb-3">{{ $ong['descripcion_corta'] }}</p>
                        </div>
                        <div class="card-footer bg-white border-0 p-4 pt-0">
                            <a href="{{ route('ong.perfil', $ong['id']) }}" class="btn btn-outline-dark w-100 fw-bold">Conocer más</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div id="estado-inicial" class="text-center py-5 text-secondary">
        <i class="bi bi-hand-index fs-1 mb-3 d-block opacity-50"></i>
        <h4>Selecciona una de las áreas arriba</h4>
        <p>Para descubrir la información y las ONGs relacionadas a ese tema.</p>
    </div>

</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const botones = document.querySelectorAll('.btn-area');
    const seccionResultados = document.getElementById('seccion-resultados');
    const estadoInicial = document.getElementById('estado-inicial');
    const tituloArea = document.getElementById('titulo-area');
    const descArea = document.getElementById('descripcion-area');
    const todasLasOngs = document.querySelectorAll('.tarjeta-ong');

    const infoAreas = {
        'Tecnología': {
            titulo: 'Innovación y Tecnología',
            descripcion: 'Apoyamos a organizaciones dedicadas a democratizar el acceso a herramientas digitales. Desde la restauración de equipos de cómputo hasta la enseñanza de lenguajes de programación, buscamos que la tecnología sea un motor de movilidad social.'
        },
        'Ecología': {
            titulo: 'Medio Ambiente y Ecología',
            descripcion: 'Agrupamos iniciativas enfocadas en la preservación de nuestro planeta. Nuestras ONGs aliadas trabajan incansablemente en la limpieza de mares, reforestación de bosques y rescate de fauna silvestre afectada.'
        },
        'Educación': {
            titulo: 'Educación y Desarrollo',
            descripcion: 'Creemos que la educación es la base del cambio. Aquí encontrarás fundaciones enfocadas en combatir el rezago educativo mediante tutorías comunitarias, donación de útiles escolares y fomento a la lectura.'
        }
    };

    botones.forEach(boton => {
        boton.addEventListener('click', function() {
            const areaSeleccionada = this.getAttribute('data-area');
            
            botones.forEach(b => b.style.transform = "scale(1)");
            this.style.transform = "scale(1.03)";
            this.style.transition = "all 0.3s ease";

            tituloArea.textContent = infoAreas[areaSeleccionada].titulo;
            descArea.textContent = infoAreas[areaSeleccionada].descripcion;

            estadoInicial.classList.add('d-none');
            seccionResultados.classList.remove('d-none');

            todasLasOngs.forEach(tarjeta => {
                tarjeta.style.display = 'none';
                
                if (tarjeta.classList.contains('cat-' + areaSeleccionada) || 
                   (areaSeleccionada === 'Ecología' && tarjeta.classList.contains('cat-EcoTech')) ||
                   (areaSeleccionada === 'Tecnología' && tarjeta.classList.contains('cat-EcoTech'))) {
                    
                    tarjeta.style.display = 'block';
                    tarjeta.style.animation = "fadeIn 0.5s ease";
                }
            });
        });
    });
});
</script>

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
@endsection