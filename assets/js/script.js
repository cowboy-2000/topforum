const button = document.querySelector('.navbar-toggler');
const navbarSupportedContent = document.getElementById('navbarSupportedContent');
button.addEventListener('click', () => {
    navbarSupportedContent.classList.toggle('collapsed');
    button.style.display = 'none';
});
const close = document.querySelector('.navbar__link--close');
close.addEventListener('click', () => {
    navbarSupportedContent.classList.toggle('collapsed');
    button.style.display = 'flex';
});