var hamburger = document.querySelector("nav section i");
var menu = document.querySelector("nav section:nth-child(3)");
var hamburger = document.querySelector("nav section i");
var menu = document.querySelector("nav section:nth-child(3)");
hamburger.addEventListener('click', function() {
    menu.classList.toggle('mostrar');
});
