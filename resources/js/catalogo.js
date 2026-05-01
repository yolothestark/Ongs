// 1. Enlace a divisiones mediante ClassName
// Supongamos que tus tarjetas de producto tienen la clase 'card-producto'
const productos = document.getElementsByClassName('card-producto');

// 2. Funciones explícitas para las acciones
function resaltarProducto() {
    // Usamos 'this' para referirnos al elemento que disparó el evento
    
    // Incrementar tamaño 5% y redondear
    this.style.transform = "scale(1.05)";
    this.style.transition = "all 0.3s ease"; // Para que se vea fluido
    this.classList.add('rounded-xl'); // Redondear esquinas

    // Gestionar bordes y sombra con Tailwind
    this.classList.remove('border-gray-400');
    this.classList.add('border-red-500');
    this.classList.add('shadow-2xl');
}

function restaurarProducto() {
    // Regresar a la normalidad
    this.style.transform = "scale(1)";
    this.classList.remove('rounded-xl');
    
    // Restaurar borde y quitar sombra
    this.classList.remove('border-red-500', 'shadow-2xl');
    this.classList.add('border-gray-400');
}

// 3. Agregar evento mediante addEventListener a cada producto
for (let i = 0; i < productos.length; i++) {
    // Opcional: Enlace mediante ID si quieres ser muy específico, 
    // pero el loop con ClassName es lo más eficiente para un catálogo.
    productos[i].addEventListener("mouseover", resaltarProducto);
    productos[i].addEventListener("mouseout", restaurarProducto);
}