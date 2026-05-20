<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directorio de ONGs</title>
    
    @vite([
        'resources/css/app.scss', 
        'resources/css/estructural.css', 
        'resources/js/app.js'
    ])
</head>

<body class="d-flex flex-column min-vh-100 text-dark bg-light">

    @include('components.header')

    <main class="flex-grow-1 py-4">
        @yield('content')
    </main>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>