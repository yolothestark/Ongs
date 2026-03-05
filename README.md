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