@extends('layouts.app')

@section('content')
    <section class="contenedor-principal seccion-hero">
        <article class="hero-texto">
            <h1>Encuentra las organizaciones que transforman tu comunidad</h1>
            <p>Conecta con miles de ONGs trabajando en causas que importan. Descubre misiones, ubicaciones y formas de apoyar el cambio social desde tu región.</p>
            <div class="hero-botones">
                <button class="btn-primario">Explorar</button>
                <button class="btn-secundario">Aprender</button>
            </div>
        </article>
        <aside class="hero-imagen">
            <img src="{{ asset('img/hero.jpg') }}" alt="Equipo" class="hero-img-real">
        </aside>
    </section>

    <div class="seccion-full-width bg-verde">
        <section class="contenedor-principal layout-dos-columnas-align" style="padding: 100px 20px;">
            <div class="columna-izq">
                <span style="font-weight: 700;">Plataforma</span>
                <h2>Tu puerta al<br>cambio</h2>
            </div>
            <div class="columna-der">
                <p>Acceso directo a información verificada sobre organizaciones no gubernamentales. Conoce sus trabajos, ubicación y cómo conectar con ellas.</p>
                <div style="display:flex; gap:15px;">
                    <button class="btn-primario">Buscar</button>
                    <button class="btn-secundario">Saber más</button>
                </div>
            </div>
        </section>
    </div>

    <section class="contenedor-principal" style="text-align: center; padding: 100px 20px;">
        <span style="font-weight: 700;">Capacidades</span>
        <h2 style="font-size: 36px; margin: 10px 0;">Lo que ofrecemos</h2>
        <p>Herramientas para conectar con el trabajo que importa</p>
        
        <div class="grid-tres-columnas" style="text-align: left;">
            <article class="tarjeta-capacidad" style="background-image: url('{{ asset('img/cap1.jpg') }}'); background-size: cover;">
                <div class="overlay-oscuro"></div>
                <img src="{{ asset('img/box-icon.png') }}" class="icono-blanco" alt="Icono">
                <h3>Búsqueda inteligente de organizaciones</h3>
                <p>Localiza ONGs por nombre, misión o área de trabajo</p>
                <a href="#">Descubrir ></a>
            </article>
            <article class="tarjeta-capacidad" style="background-image: url('{{ asset('img/cap2.jpg') }}'); background-size: cover;">
                <div class="overlay-oscuro"></div>
                <img src="{{ asset('img/box-icon.png') }}" class="icono-blanco" alt="Icono">
                <h3>Filtros por ubicación y especialidad</h3>
                <p>Refina resultados según tu región y causa preferida</p>
                <a href="#">Explorar ></a>
            </article>
            <article class="tarjeta-capacidad" style="background-image: url('{{ asset('img/cap3.jpg') }}'); background-size: cover;">
                <div class="overlay-oscuro"></div>
                <img src="{{ asset('img/box-icon.png') }}" class="icono-blanco" alt="Icono">
                <h3>Información de contacto verificada</h3>
                <p>Comunicate directamente con las organizaciones</p>
                <a href="#">Conectar ></a>
            </article>
        </div>
    </section>

    <section class="contenedor-principal" style="text-align: center;">
        <span style="font-weight: 700;">Ventajas</span>
        <h2 style="font-size: 36px; margin: 10px 0;">Por qué elegirnos</h2>
        <p>Una plataforma diseñada para facilitar encuentros significativos</p>

        <div class="grid-dos-columnas" style="text-align: left;">
            <article class="tarjeta-ventaja">
                <img src="{{ asset('img/ven1.jpg') }}" alt="Usuarios">
                <div class="tarjeta-ventaja-contenido">
                    <span>Usuarios</span>
                    <h3>Acceso transparente a organizaciones verificadas</h3>
                    <p>Encuentra exactamente dónde y cómo contribuir a causas que te importan verdaderamente</p>
                    <div class="tarjeta-ventaja-botones">
                        <button class="btn-secundario">Unirse</button>
                        <a href="#">Leer ></a>
                    </div>
                </div>
            </article>
            <article class="tarjeta-ventaja">
                <img src="{{ asset('img/ven2.jpg') }}" alt="Organizaciones">
                <div class="tarjeta-ventaja-contenido">
                    <span>Organizaciones</span>
                    <h3>Visibilidad para tu trabajo social</h3>
                    <p>Expande tu alcance y conecta con personas dispuestas a apoyar tu misión en la comunidad</p>
                    <div class="tarjeta-ventaja-botones">
                        <button class="btn-secundario">Registrar</button>
                        <a href="#">Saber ></a>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <div class="seccion-full-width bg-gris" style="margin-top: 80px;">
        <section class="contenedor-principal seccion-preguntas" style="padding: 100px 20px;">
            <h2 style="font-size: 36px;">Preguntas</h2>
            <p>Resolvemos tus dudas sobre cómo funciona Directorio de ONGs</p>
            
            <div class="faq-lista">
                <div class="faq-item">
                    <h3 style="font-size: 20px;">¿Cómo busco una ONG?</h3>
                    <p>Usa la búsqueda por nombre, misión o área de trabajo. Puedes filtrar por ubicación y especialidad para encontrar exactamente lo que buscas en tu región.</p>
                </div>
                <div class="faq-item">
                    <h3 style="font-size: 20px;">¿Es segura la información?</h3>
                    <p>Sí. Verificamos todos los datos de las organizaciones registradas para garantizar que recibas información confiable y actualizada.</p>
                </div>
                <div class="faq-item">
                    <h3 style="font-size: 20px;">¿Puedo contactar directamente?</h3>
                    <p>Claro. Cada perfil incluye información de contacto verificada.</p>
                </div>
            </div>

            <h2 style="font-size: 32px; margin-top: 60px;">¿Necesitas más ayuda?</h2>
            <p>Nuestro equipo está disponible para resolver tus consultas.</p>
            <button class="btn-secundario" style="margin-top: 20px;">Contactar</button>
        </section>
    </div>
@endsection