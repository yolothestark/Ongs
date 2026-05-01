@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold">Áreas de Trabajo</h1>
        <p class="lead">Explora las diferentes causas que apoyamos estructuralmente.</p>
    </div>

    <div class="row g-4 justify-content-center">
        <div class="col-md-4">
            <div id="area-salud" class="card h-100 border-0 shadow-sm clase-area text-white" style="background-color: #0f172a; transition: all 0.3s ease; cursor: pointer;">
                <div class="card-body p-4 text-center">
                    <h3 class="fw-bold">Salud</h3>
                    <p>Organizaciones enfocadas en bienestar y salud pública.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div id="area-derechos" class="card h-100 border-0 shadow-sm clase-area" style="background-color: #bbf7d0; transition: all 0.3s ease; cursor: pointer;">
                <div class="card-body p-4 text-center">
                    <h3 class="fw-bold text-dark">Derechos Humanos</h3>
                    <p class="text-dark">Defensa y promoción de garantías individuales y desarrollo social.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div id="area-ambiente" class="card h-100 border-0 shadow-sm clase-area" style="background-color: #f8fafc; transition: all 0.3s ease; cursor: pointer;">
                <div class="card-body p-4 text-center">
                    <h3 class="fw-bold text-dark">Medio Ambiente</h3>
                    <p class="text-dark">Protección de ecosistemas, reforestación y recursos naturales.</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- BLOQUE DE JAVASCRIPT - ACTIVIDAD 17 --}}
<script>
document.addEventListener("DOMContentLoaded", function() {
    // 1. Enlace a divisiones mediante ClassName
    const areas = document.getElementsByClassName('clase-area');

    // 2. Funciones explícitas para la acción (3 efectos diferentes)

    // EFECTO 1: Salud (Escala y Brillo Suave)
    function resaltarSalud() {
        const el = document.getElementById('area-salud'); // Enlace mediante ById
        el.classList.add('shadow-lg', 'border', 'border-info'); // classList.add
        el.style.transform = "scale(1.05)";
        el.style.filter = "brightness(0.85)"; // Oscurecimiento sutil que no tapa el texto
    }

    // EFECTO 2: Derechos Humanos (Desplazamiento y Cambio de Color)
    function resaltarDerechos() {
        const el = document.getElementById('area-derechos');
        el.classList.add('shadow-lg');
        el.style.transform = "translateY(-12px)";
        el.style.backgroundColor = "#86efac"; // Verde más intenso
    }

    // EFECTO 3: Medio Ambiente (Borde Dinámico y Elevación)
    function resaltarAmbiente() {
        const el = document.getElementById('area-ambiente');
        el.classList.add('shadow-lg');
        el.style.transform = "translateY(-12px)";
        el.style.border = "2px solid #22c55e"; // Borde verde ambiental
    }

    // FUNCIÓN DE RESTAURACIÓN (Mouseout)
    function restaurarElemento() {
        this.style.transform = "scale(1) translateY(0px)";
        this.style.filter = "brightness(1)";
        this.classList.remove('shadow-lg', 'border', 'border-info'); // classList.remove
        
        // Restaurar fondos originales
        if(this.id === 'area-salud') this.style.backgroundColor = "#0f172a";
        if(this.id === 'area-derechos') this.style.backgroundColor = "#bbf7d0";
        if(this.id === 'area-ambiente') {
            this.style.backgroundColor = "#f8fafc";
            this.style.border = "none";
        }
    }

    // 3. Agregar eventos mediante addEventListener
    document.getElementById('area-salud').addEventListener('mouseover', resaltarSalud);
    document.getElementById('area-derechos').addEventListener('mouseover', resaltarDerechos);
    document.getElementById('area-ambiente').addEventListener('mouseover', resaltarAmbiente);

    // Aplicar el mouseout a todos usando el bucle sobre la ClassName
    for (let i = 0; i < areas.length; i++) {
        areas[i].addEventListener('mouseout', restaurarElemento);
    }
});
</script>
@endsection