let lastScrollPosition = 0;
const header = document.querySelector('.header');

window.addEventListener('scroll', function() {
  const currentScrollPosition = window.pageYOffset || document.documentElement.scrollTop;

  if (currentScrollPosition > lastScrollPosition) {
    // Desplazamiento hacia abajo
    header.classList.add('hidden');
  } else {
    // Desplazamiento hacia arriba
    header.classList.remove('hidden');
  }

  lastScrollPosition = currentScrollPosition;
});
