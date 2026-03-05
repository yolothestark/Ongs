<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/areas-trabajo', function () {
    return view('pages.areas-trabajo');
})->name('areas-trabajo');

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
