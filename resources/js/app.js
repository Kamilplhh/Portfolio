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
    strings: ["DD($table)", "setInterval", "404", "Coding", "sail up", "git add .", "laravel new project", "git status"],
    typeSpeed: 100,
    backSpeed: 100,
    loop: true
})

setInterval(() => document.getElementById("clock").innerHTML = (new Date().toLocaleTimeString()),1000);

const discord = document.getElementById("discord");

discord.addEventListener("click", function(){ alert("Kamil HH#0012 feel free to add")})

const circle = document.getElementById("circle");
const contact = document.getElementById("contact");

circle.addEventListener("click", function () {
    contact.classList.toggle('fade');
});

const project = document.getElementById("project");
const projectDesc = document.getElementById("project-description")

project.addEventListener("click", function () {
    projectDesc.classList.toggle("visible");
});