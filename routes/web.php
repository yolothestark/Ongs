<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OngController;

Route::get('/', function () {
    // Apuntamos a la carpeta 'pages' y al archivo 'index'
    return view('pages.index'); 
});

// Rutas principales
Route::get('/', function () {
    return view('pages.index');
})->name('inicio');

Route::get('/sobre-nosotros', function () {
    return view('pages.sobre-nosotros');
})->name('sobre-nosotros');

Route::get('/directorio', function () {
    return view('pages.directorio');
})->name('directorio');

Route::get('/areas-trabajo', [OngController::class, 'areas'])->name('areas-trabajo');

Route::get('/noticias', function () {
    return view('pages.noticias');
})->name('noticias');

Route::get('/participa', function () {
    return view('pages.participa');
})->name('participa');

Route::get('/contacto', function () {
    return view('pages.contacto');
})->name('contacto');

// Rutas legales (Footer)
Route::get('/politica-privacidad', function () {
    return view('pages.politica-privacidad');
})->name('politica-privacidad');

Route::get('/terminos-servicio', function () {
    return view('pages.terminos-servicio');
})->name('terminos-servicio');

Route::get('/configuracion-cookies', function () {
    return view('pages.configuracion-cookies');
})->name('configuracion-cookies');

Route::get('/preguntas-frecuentes', function () {
    return view('pages.faq');
})->name('faq');



// Esta ruta recibe el ID de la ONG que el usuario seleccione
Route::get('/directorio/{id}', [OngController::class, 'show'])->name('ong.perfil');
