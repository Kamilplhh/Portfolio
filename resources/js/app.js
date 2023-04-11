import Typed from 'typed.js';

const links = document.getElementById("links");
const button = document.getElementById("fake");


button.addEventListener("mouseenter", function () {
    links.classList.toggle('fade');
    button.classList.toggle('fade');
    setTimeout(function() {
        links.classList.toggle('fade');
        button.classList.toggle('fade');
    }, 6000)
});



const typed = new Typed("#typed", {
    strings: ["DD($table)", "setInterval", "Coding", "sail up", "git add .", "laravel new project", "git status"],
    typeSpeed: 100,
    backSpeed: 100,
    loop: true
})

setInterval(() => document.getElementById("clock").innerHTML = (new Date().toLocaleTimeString()),1000);