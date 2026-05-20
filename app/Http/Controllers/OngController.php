<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OngController extends Controller
{
    private function getOngs()
    {
        return [
            1 => [
                'id' => 1,
                'nombre' => 'RenuevaTech',
                'categoria' => 'Tecnología', 'alcance' => 'Local', 'tipo' => 'Donaciones',
                'descripcion_corta' => 'Recolección de hardware para donarlo a estudiantes de la ciudad.',
                'descripcion_larga' => 'En RenuevaTech nos dedicamos a acopiar equipos de cómputo en desuso, restaurarlos y optimizarlos para entregarlos a estudiantes. Nuestro taller opera para garantizar que la falta de herramientas tecnológicas no sea un impedimento para la educación de los jóvenes de nuestra comunidad.',
                'telefono' => '+52 33 1122 3344', 'email' => 'hola@renuevatech.org', 'direccion' => 'Av. Tonaltecas 450, Centro, Tonalá, Jalisco.', 'sitio_web' => 'www.renuevatech.org'
            ],
            2 => [
                'id' => 2,
                'nombre' => 'Bosques Libres',
                'categoria' => 'Ecología', 'alcance' => 'Regional', 'tipo' => 'Voluntariado',
                'descripcion_corta' => 'Brigadas de reforestación en los estados del occidente del país.',
                'descripcion_larga' => 'Organizamos campamentos y brigadas de fin de semana para plantar árboles nativos en zonas afectadas por incendios y tala ilegal. Trabajamos en conjunto con biólogos para asegurar la supervivencia de las especies plantadas.',
                'telefono' => '+52 33 2233 4455', 'email' => 'voluntarios@bosqueslibres.org', 'direccion' => 'Camino al Vado 12, Tonalá, Jalisco.', 'sitio_web' => 'www.bosqueslibres.org'
            ],
            3 => [
                'id' => 3,
                'nombre' => 'Código Abierto',
                'categoria' => 'Educación', 'alcance' => 'Nacional', 'tipo' => 'Capacitación',
                'descripcion_corta' => 'Cursos gratuitos de programación web para jóvenes en todo el país.',
                'descripcion_larga' => 'Nuestra misión es democratizar la educación tecnológica. Impartimos bootcamps remotos y presenciales sobre desarrollo web, bases de datos y lógica de programación, preparando a la próxima generación de desarrolladores.',
                'telefono' => '+52 55 9988 7766', 'email' => 'contacto@codigoabierto.mx', 'direccion' => 'Plataforma 100% Virtual', 'sitio_web' => 'www.codigoabierto.mx'
            ],
            4 => [
                'id' => 4,
                'nombre' => 'Lectura Para Todos',
                'categoria' => 'Educación', 'alcance' => 'Local', 'tipo' => 'Voluntariado',
                'descripcion_corta' => 'Círculos de lectura en bibliotecas públicas municipales.',
                'descripcion_larga' => 'Fomentamos el hábito de la lectura desde la infancia. Nuestros voluntarios organizan cuentacuentos, talleres de comprensión lectora y recolección de libros para enriquecer el acervo de las bibliotecas de la zona.',
                'telefono' => '+52 33 5544 3322', 'email' => 'leer@lecturaparatodos.org', 'direccion' => 'Biblioteca Municipal, Emiliano Zapata 34, Tonalá.', 'sitio_web' => 'www.lecturaparatodos.org'
            ],
            5 => [
                'id' => 5,
                'nombre' => 'Salvemos el Océano',
                'categoria' => 'Ecología', 'alcance' => 'Nacional', 'tipo' => 'Donaciones',
                'descripcion_corta' => 'Fondo nacional para la limpieza de playas y protección marina.',
                'descripcion_larga' => 'Canalizamos recursos para financiar expediciones de limpieza costera, rescate de fauna marina atrapada en plásticos y campañas de concientización sobre el impacto de la contaminación en nuestros mares.',
                'telefono' => '+52 322 111 2233', 'email' => 'donaciones@salvemoseloceano.org', 'direccion' => 'Marina Vallarta L-15, Puerto Vallarta, Jalisco.', 'sitio_web' => 'www.salvemoseloceano.org'
            ],
            6 => [
                'id' => 6,
                'nombre' => 'Mujeres en Tech',
                'categoria' => 'Tecnología', 'alcance' => 'Regional', 'tipo' => 'Capacitación',
                'descripcion_corta' => 'Bootcamps intensivos para mujeres interesadas en la ciencia de datos.',
                'descripcion_larga' => 'Buscamos cerrar la brecha de género en la industria tecnológica. Ofrecemos becas y programas intensivos de mentoría para mujeres que buscan iniciar o transicionar su carrera hacia el análisis de datos y la inteligencia artificial.',
                'telefono' => '+52 33 8877 6655', 'email' => 'hola@mujeresentech.org', 'direccion' => 'Av. Chapultepec 123, Guadalajara, Jalisco.', 'sitio_web' => 'www.mujeresentech.org'
            ],
            7 => [
                'id' => 7,
                'nombre' => 'Reciclaje Inteligente',
                'categoria' => 'EcoTech', 'alcance' => 'Local', 'tipo' => 'Voluntariado',
                'descripcion_corta' => 'Desarrollo de apps para mapear zonas de reciclaje en la ciudad.',
                'descripcion_larga' => 'Combinamos tecnología y ecología. Nuestro equipo de voluntarios desarrolla y mantiene una aplicación móvil gratuita que ayuda a los ciudadanos a ubicar los centros de acopio y reciclaje más cercanos a su domicilio.',
                'telefono' => '+52 33 4455 6677', 'email' => 'devs@reciclajeinteligente.mx', 'direccion' => 'Calle Pino Suárez 89, Tonalá Centro.', 'sitio_web' => 'www.reciclajeinteligente.mx'
            ],
            8 => [
                'id' => 8,
                'nombre' => 'Mochilas Llenas',
                'categoria' => 'Educación', 'alcance' => 'Regional', 'tipo' => 'Donaciones',
                'descripcion_corta' => 'Colecta de útiles escolares para comunidades rurales del estado.',
                'descripcion_larga' => 'Al inicio de cada ciclo escolar, armamos y distribuimos kits con cuadernos, lápices y mochilas para que ningún niño de zonas rurales abandone la escuela por falta de material básico.',
                'telefono' => '+52 33 7777 8888', 'email' => 'apoyo@mochilasllenas.org', 'direccion' => 'Bodega 4, Mercado de Abastos, Guadalajara.', 'sitio_web' => 'www.mochilasllenas.org'
            ],
            9 => [
                'id' => 9,
                'nombre' => 'Internet Digno',
                'categoria' => 'Tecnología', 'alcance' => 'Nacional', 'tipo' => 'Voluntariado',
                'descripcion_corta' => 'Instalación de antenas comunitarias en zonas de difícil acceso.',
                'descripcion_larga' => 'Creemos que el acceso a internet es un derecho humano. Instalamos infraestructura de red comunitaria de bajo costo en poblaciones aisladas, capacitando a los habitantes para mantener su propia red.',
                'telefono' => '+52 55 1234 9876', 'email' => 'redes@internetdigno.mx', 'direccion' => 'Insurgentes Sur 456, CDMX.', 'sitio_web' => 'www.internetdigno.mx'
            ],
            10 => [
                'id' => 10,
                'nombre' => 'Aulas Comunitarias',
                'categoria' => 'Educación', 'alcance' => 'Local', 'tipo' => 'Capacitación',
                'descripcion_corta' => 'Talleres de regularización impartidos por universitarios.',
                'descripcion_larga' => 'Estudiantes universitarios donan su tiempo para impartir clases de regularización en matemáticas, ciencias y lectura a niños de primaria y secundaria en centros comunitarios.',
                'telefono' => '+52 33 9999 1111', 'email' => 'talleres@aulascomunitarias.org', 'direccion' => 'Av. Nuevo Periférico Oriente 555, Tonalá, Jalisco.', 'sitio_web' => 'www.aulascomunitarias.org'
            ],
            11 => [
                'id' => 11,
                'nombre' => 'Rescate Animal',
                'categoria' => 'Ecología', 'alcance' => 'Regional', 'tipo' => 'Donaciones',
                'descripcion_corta' => 'Refugio regional que rehabilita fauna nativa afectada por incendios.',
                'descripcion_larga' => 'Operamos una clínica veterinaria y santuario temporal para fauna silvestre que ha sido desplazada o herida por el crecimiento urbano y los incendios forestales, con el objetivo de reintroducirlos a su hábitat.',
                'telefono' => '+52 33 4444 5555', 'email' => 'emergencias@rescateanimal.mx', 'direccion' => 'Reserva Ecológica, Zapopan, Jalisco.', 'sitio_web' => 'www.rescateanimal.mx'
            ],
            12 => [
                'id' => 12,
                'nombre' => 'Programación Kids',
                'categoria' => 'Tecnología', 'alcance' => 'Nacional', 'tipo' => 'Donaciones',
                'descripcion_corta' => 'Entrega de mini-ordenadores Raspberry a niños de escasos recursos.',
                'descripcion_larga' => 'Proporcionamos kits de hardware asequible (Raspberry Pi) y manuales didácticos para que los niños puedan aprender computación básica y robótica desde sus casas.',
                'telefono' => '+52 81 2222 3333', 'email' => 'donar@programacionkids.org', 'direccion' => 'Pabellón Tecnológico, Monterrey, N.L.', 'sitio_web' => 'www.programacionkids.org'
            ],
        ];
    }

    public function show($id)
    {
        $ongs = $this->getOngs();
        
        if (!array_key_exists($id, $ongs)) {
            abort(404);
        }

        $ong = $ongs[$id];
        return view('pages.perfil-ong', compact('ong'));
    }
}