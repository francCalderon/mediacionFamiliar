// resources/js/app.js
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.min.js';


import '@fortawesome/fontawesome-free/scss/fontawesome.scss';
import '@fortawesome/fontawesome-free/scss/brands.scss';
import '@fortawesome/fontawesome-free/scss/regular.scss';
import '@fortawesome/fontawesome-free/scss/solid.scss';
import '@fortawesome/fontawesome-free/scss/v4-shims.scss';
import '@fortawesome/fontawesome-free/css/all.css';


window.addEventListener("scroll", function () {
    var header = document.querySelector("header");
    header.classList.toggle("abajo", window.scrollY > 0);
})

window.addEventListener('scroll', function () {
    let elements = document.getElementsByClassName('scroll-content');
    let screenSize = window.innerHeight;

    for (var i = 0; i < elements.length; i++) {
        let element = elements[i];

        if (element.getBoundingClientRect().top < screenSize) {
            element.classList.add('visible');
        } else {
            element.classList.remove('visible');
        }
    }
});


