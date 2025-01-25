// Fichier JavaScript pour le menu 'burger' du site SmartBike
const burger = document.querySelector('.smartbike-burger');
const menu = document.querySelector('.smartbike-pages');

burger.addEventListener('click', () => {
    burger.classList.toggle('active');
    menu.classList.toggle('active');
});