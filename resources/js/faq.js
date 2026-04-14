// Le decimos al código que espere a que el HTML cargue por completo
alert("¡El archivo JS sí está conectado!");

document.addEventListener("DOMContentLoaded", function() {

    // 1. Obtener los elementos
    let p1 = document.getElementById("pregunta1");
    let r1 = document.getElementById("respuesta1");

    let p2 = document.getElementById("pregunta2");
    let r2 = document.getElementById("respuesta2");

    let p3 = document.getElementById("pregunta3");
    let r3 = document.getElementById("respuesta3");

    // 2. Función genérica para mostrar/ocultar
    function toggle(respuesta) {
        respuesta.classList.toggle("hidden");
    }

    // 3. Asignar eventos independientes
    p1.addEventListener("click", function() {
        toggle(r1);
    });

    p2.addEventListener("click", function() {
        toggle(r2);
    });

    p3.addEventListener("click", function() {
        toggle(r3);
    });

});