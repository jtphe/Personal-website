window.addEventListener('load', function () {
    let mainNav = document.getElementsByClassName('navbar-menu');
    let navBarToggle = document.getElementById('js-navbar-toggle');

    navBarToggle.addEventListener('click', function () {
        mainNav.style.setProperty('display', 'initial');
    });
})