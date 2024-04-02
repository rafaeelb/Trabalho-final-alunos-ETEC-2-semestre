const hamburguer = document.querySelector('.hamburguer');
const navlinks = document.querySelector('.nav-link');
const links = document.querySelectorAll('.nav-link li');

console.log(links);

hamburguer.addEventListener("click", () => {
    navlinks.classList.toggle("open");
    links.forEach(link => {
        link.classList.toggle("fade");
    });
});