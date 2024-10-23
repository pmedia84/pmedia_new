//nav button active states
const navBtn = document.querySelector('.nav-btn');
const navMenu = document.querySelector('.nav-menu');
const navBar = document.querySelector('.nav-bar');
navBtn.addEventListener('click', () => {
    const isOpened = navBtn.getAttribute('aria-expanded') === "true";

    if (isOpened ? closenavLinks() : opennavLinks());
})


function opennavLinks() {
    navBtn.setAttribute('aria-expanded', "true");
    navMenu.setAttribute('data-state', "opened");
    navBar.setAttribute('data-state', "opened");
}
function closenavLinks() {
    navBtn.setAttribute('aria-expanded', "false");
    navMenu.setAttribute('data-state', "closing");
    navBar.setAttribute('data-state', "closed");
    navMenu.addEventListener('animationend', () => {
        navMenu.setAttribute('data-state', "closed");

    }, { once: true })
}

///Intersection Observer
const navbar = document.querySelector(".nav-bar");
const hero = document.querySelector(".hero-text");
const options = {
    threshold: [0.9],
   rootMargin: "-70px 0px 0px 0px",
};

const heroobserver = new IntersectionObserver(function(entries, heroobserver) {
    entries.forEach(entry =>{
        if(!entry.isIntersecting)
        navbar.classList.add("nav-scrolled");
        else{
            navbar.classList.remove("nav-scrolled");
        }
    });
},options);
heroobserver.observe(hero);