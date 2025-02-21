document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("menu-toggle");
    const menu = document.querySelector(".menu-principal");

    if (!menuToggle || !menu) {
        console.error("Error: No se encontró el menú o el botón en el DOM.");
        return; // Evita que el código se ejecute si no existen los elementos
    }

    menuToggle.addEventListener("click", function () {
        menu.classList.toggle("active");
    });
});