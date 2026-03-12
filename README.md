<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


# Actividad Colaborativa: Maquetado Estructural en HTML con clases CSS
**Proyecto:** Directorio de ONGs (Laravel)
**Equipo:**
* Anguiano García Ángel Yahir Guadalupe
* Figueroa Robles Axel Israel

---

## 1. ¿Cómo respetamos el wireframe?
Para mantener una fidelidad total entre el wireframe aprobado y el maquetado HTML, nos enfocamos exclusivamente en la "obra negra" del sitio. 
* **Estructura Semántica:** Mapeamos cada bloque del wireframe a su etiqueta semántica de HTML5 correspondiente (`<header>`, `<nav>`, `<main>`, `<section>`, `<article>`, `<aside>`, `<footer>`).
* **Fidelidad Estructural:** Respetamos la jerarquía visual y la ubicación exacta de los bloques (por ejemplo, manteniendo las barras laterales (`<aside>`) donde el diseño lo indicaba).
* **Cero Diseño Visual:** Evitamos estrictamente el uso de colores de marca, tipografías personalizadas o imágenes reales. En su lugar, utilizamos textos de prueba, placeholders para las imágenes y un borde punteado gris (`border: 1px dashed #ccc`) genérico en los contenedores principales para evidenciar la delimitación de las áreas.

## 2. Sistema de distribución utilizado (Flexbox y Grid)
Para lograr la distribución de los elementos de manera estructurada y responsiva, implementamos una combinación de **CSS Grid** y **Flexbox**, dependiendo de la necesidad del bloque:
* **CSS Grid:** Lo utilizamos para las secciones que requerían una distribución de columnas estricta y bidimensional. Por ejemplo, la clase `.grid-tres-columnas` (`grid-template-columns: repeat(3, 1fr)`) se usó para la sección de "Capacidades" y "Áreas de Trabajo", mientras que `.grid-dos-columnas` se aplicó en las "Ventajas".
* **Flexbox:** Lo implementamos para alineaciones unidimensionales y distribución de espacio interno. Se usó en el `header` (para separar el logo y el menú de navegación), en las tarjetas individuales (para apilar iconos, títulos y botones de forma vertical) y en la estructura general móvil mediante *Media Queries* para colapsar los elementos a una sola columna.

## 3. ¿Cómo definimos las proporciones?
Las proporciones se establecieron buscando imitar el peso visual del wireframe original sin depender de medidas fijas en píxeles que rompieran la adaptabilidad:
* **Contenedores Máximos:** Utilizamos un `.contenedor-principal` con un `max-width: 1200px` y márgenes automáticos (`margin: 0 auto`) para centrar el contenido y mantener los márgenes laterales como en el diseño de escritorio.
* **Unidades Relativas:** En CSS Grid utilizamos la unidad fraccional `fr` para asegurar que las columnas midieran exactamente lo mismo y se repartieran el espacio equitativamente.
* **Flex-grow:** En las secciones divididas a la mitad (como el bloque "Hero" con texto de un lado y una imagen del otro), utilizamos la propiedad `flex: 1` para que ambas áreas tomaran exactamente el 50% de la proporción disponible, respetando la asimetría o simetría plasmada en los dibujos.

---

##  Ejecución del Proyecto en Laravel
1. Instalar dependencias: `composer install` y `npm install`.
2. Compilar el CSS estructural: `npm run dev`.
3. Levantar el servidor local: `php artisan serve`.
4. Navegar por los enlaces del menú para visualizar las 10 pantallas renderizadas a través del sistema de plantillas Blade.





Sengunda parte 
# Directorio de ONGs - Diseño Visual y Maquetado

Este proyecto es el resultado de la **Actividad 9: Desarrollo de Mockups a partir de los wireframes** para la materia de **Gráficos, Interfaces y Usabilidad**.

##  Equipo de Desarrollo
* Anguiano García Ángel Yahir Guadalupe
* Figueroa Robles Axel Israel

---

##  Objetivo del Proyecto
Aplicar el diseño visual de los mockups (creados en Relume.io) sobre el maquetado HTML estructural previamente desarrollado. El objetivo principal fue integrar un framework CSS (Bootstrap 5) para dar estilo, color y jerarquía visual a 10 páginas, sin alterar en absoluto la estructura semántica original del wireframe.

---

##  Justificación Técnica (Requerimientos de la Rúbrica)

### 1. ¿Cómo implementamos el diseño de los mockups en el sitio web?
Implementamos el diseño visual integrando el framework **Bootstrap 5** directamente sobre el maquetado estructural previamente desarrollado en Laravel. No se alteró la semántica HTML (`<header>`, `<main>`, `<section>`, `<footer>`); en su lugar, mapeamos las áreas estructurales del wireframe hacia el sistema de cuadrículas (Grid System) y componentes de Bootstrap. Sobrescribimos en CSS únicamente las variables de color nativas (`--bs-primary`, `--bs-secondary`) para que los tonos coincidieran de manera idéntica con la paleta de colores corporativa de nuestro Mockup original.

### 2. ¿Qué clases y componentes del framework utilizamos?
Se utilizaron rigurosamente las clases de utilidad de Bootstrap tal como se solicita en los requerimientos:
* **Tipografía y Color:** `display-4`, `display-5`, `h1`, `h4`, `fw-bold`, `text-center`, `text-white`, `text-secondary`. Los colores de fondo se controlaron con `bg-primary` (Azul Navy corporativo) y `bg-secondary` (Verde suave).
* **Componentes:** Se implementó el componente `card` (con utilidades como `border-0`, `shadow-sm`, `rounded-4`) para las áreas de "Capacidades" y "Ventajas", y las clases `btn btn-info` y `btn-outline-light` para los botones interactivos, así como `form-control` para los inputs y textareas del footer y la página de contacto.
* **Alineación y Espaciado:** Utilizamos extensivamente `d-flex`, `justify-content-between` y `align-items-center` para los menús y cabeceras. El sistema de grillas se armó con contenedores responsivos mediante `container`, `row` y `col-md-*`. Los espaciados se controlaron con utilidades como `p-3`, `py-5`, `mt-4`, `mb-5` y `gap-3`.

### 3. ¿Cómo mantuvimos la estructura del maquetado original?
El diseño se adaptó al maquetado existente a través de la herencia de plantillas del motor **Blade en Laravel** (`app.blade.php`). El *Header*, *Menú de navegación*, *Área principal* y *Footer* conservaron sus etiquetas contenedoras intactas. El framework Bootstrap se inyectó a través de CDN en el `<head>`, limitando nuestra intervención a la pura asignación de atributos `class="..."` a los elementos ya existentes y estructurando el contenido en las 10 vistas hijas mediante `@yield('content')`.

### 4. ¿Qué dificultades encontramos y cómo las resolvimos?
* **Dificultad 1:** Bootstrap impone una paleta de colores estándar (azul, gris, verde genéricos) que rompía con la identidad visual de nuestro Mockup.
  * **Solución:** En lugar de crear clases CSS redundantes y ensuciar el HTML, utilizamos nuestro archivo `estructural.css` para redefinir el valor RGB de las variables nativas de Bootstrap en el pseudo-elemento `:root` (ej. sobrescribiendo `--bs-primary` con nuestro color *Navy*).
* **Dificultad 2:** El acomodo de las tarjetas de la sección "Capacidades", donde el texto blanco debía ir sobre una imagen fotográfica clara, lo que dificultaba la lectura.
  * **Solución:** Combinamos el componente `card` de Bootstrap con una clase CSS propia (`card-overlay`) que aplica un degradado `linear-gradient` oscuro, garantizando la jerarquía visual y la perfecta legibilidad requerida sin necesidad de editar las imágenes originales.

### 5. ¿Cómo distribuimos el trabajo en el equipo?
El trabajo se dividió de forma equitativa y colaborativa:
* **Ángel Yahir:** Implementación del framework Bootstrap mediante CDN, refactorización del layout principal (`app.blade.php`), enrutamiento del sistema de navegación dinámica en Laravel (`web.php`) y estructuración visual de formularios y botones con `form-control` y `btn`.
* **Axel Israel:** Refactorización del Grid System de Bootstrap en las 10 vistas hijas (sustituyendo CSS puro por `row` y `col-md-*`), gestión de variables CSS de sobrescritura de color (`:root`), y aplicación matemática de las clases de espaciado (`p-*, m-*, g-*`) para igualar las proporciones exactas del mockup original. 



---

##  Cómo ejecutar el proyecto localmente

Para visualizar la interfaz final en tu navegador, sigue estos pasos en tu terminal:

1. **Clonar el repositorio y entrar a la carpeta:**
   ```bash
   git clone <url-del-repositorio>
   cd ongs