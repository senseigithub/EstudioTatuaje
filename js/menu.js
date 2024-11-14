// Obtener todos los enlaces del menú
const menuLinks = document.querySelectorAll('.navigation a');

// Agregar la clase "active" al enlace clicado y quitarla de los demás enlaces
menuLinks.forEach(function(link) {
  link.addEventListener('click', function(event) {
    // Verificar si el enlace no tiene una clase "sub-menu"
    if (!this.classList.contains('sub-menu')) {
      // Remover la clase "active" de todos los enlaces
      menuLinks.forEach(function(link) {
        link.classList.remove('active');
      });

      // Agregar la clase "active" al enlace clicado
      this.classList.add('active');
    }
  });
});
